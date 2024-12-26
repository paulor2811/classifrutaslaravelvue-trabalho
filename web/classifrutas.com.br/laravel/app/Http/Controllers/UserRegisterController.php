<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLogin;
use App\Models\GrupoUsuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class UserRegisterController extends BaseController
{
    public function store(Request $request) {
        // Validação dos dados de entrada
        try {
            $validatedData = $request->validate([
                'tipo_usuario_id' => 'required|integer',
                'tipo_anunciante_id' => 'integer|nullable',
                'uuid' => 'required|uuid|unique:users,uuid',
                'name' => 'required|string|max:255',
                'nome_fantasia' => 'string|nullable|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:8',
                'grupo_usuario_id' => 'required|integer|exists:grupo_usuario,id',
                'grupo_nome' => 'required|string|max:255',
                'is_adm' => 'required|boolean',
            ]);
        } catch (\Exception $e) {
            Log::error('Validation Error: ', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Validation failed', 'error' => $e->getMessage()], 422);
        }

        DB::beginTransaction();
        try {
            // Métodos de armazenamento separados
            $user = $this->storeUser($request);
            $userLogin = $this->storeLogin($request, $user);
            $grupoUsuario = $this->storeGrupo($request, $user);

            DB::commit();

            // Retornar resposta de sucesso
            return response()->json(['message' => 'User, User Login, and GrupoUsuario created successfully', 'user' => $user, 'user_login' => $userLogin, 'grupo_usuario' => $grupoUsuario], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Creation Error: ', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'User creation failed', 'error' => $e->getMessage()], 500);
        }
    }

    public function storeUser(Request $request) {
        // Criação do usuário na tabela 'users'

        DB::beginTransaction();
        try {
            // Adicionando a data de criação gerada automaticamente pelo backend
            $user = User::create([
                'tipo_usuario_id' => $request->tipo_usuario_id,
                'tipo_anunciante_id' => $request->tipo_anunciante_id,
                'uuid' => $request->uuid,
                'name' => $request->nome,
                'nome_fantasia' => $request->nome_fantasia,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                "grupo_usuario_id" => $request->grupo_usuario_id,
                "grupo_nome" =>  $request->grupo_nome,
                "is_adm" => $request->is_adm,
            ]);

            $grupoUsuarioAdministrador = new GrupoUsuario();
            $grupoUsuarioAdministrador->nome = 'Administrador';
            $grupoUsuarioAdministrador->is_adm = true;
            $grupoUsuarioAdministrador->user_id = $user->id;
            $grupoUsuarioAdministrador->save();

            $grupoUsuarioAnunciante = new GrupoUsuario();
            $grupoUsuarioAnunciante->nome = 'Anunciante';
            $grupoUsuarioAnunciante->is_adm = false;
            $grupoUsuarioAnunciante->user_id = $user->id;
            $grupoUsuarioAnunciante->save();

            $userLogin = new UserLogin();
            $userLogin->nome = $user->name;
            $userLogin->email = $user->email;
            $userLogin->user_id = $user->id;
            $userLogin->senha = $user->password;
            $userLogin->grupo_usuario_id = $grupoUsuarioAdministrador->id;
            $userLogin->save();
            DB::commit();

            return [
                'user' => $user,
                'user_login' => $userLogin,
                'grupo_usuario_administrador' => $grupoUsuarioAdministrador,
                'grupo_usuario_anunciante' => $grupoUsuarioAnunciante,
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Creation Error: ', ['error' => $e->getMessage()]);
            throw $e;  // Lançar o erro para que o transaction possa ser revertido
        }
    }


    public function storeLogin(Request $request, User $user) {
        // Criação do login do usuário na tabela 'users_login'
        return UserLogin::create([
            'nome' => $request->name,
            'email' => $request->email,
            'senha' => Hash::make($request->password),
            'user_id' => $user->id,
            'grupo_usuario_id' => $request->grupo_usuario_id,
        ]);
    }

    public function storeGrupo(Request $request, User $user) {
        // Criação do grupo de usuário na tabela 'grupo_usuario'
        return GrupoUsuario::create([
            'nome' => $request->grupo_nome,
            'user_id' => $user->id,
            'is_adm' => $request->is_adm,
        ]);
    }
}

<script>
export default {
  name: "SocialAuthButton"
}
</script>

<template>

  <div class="social-button mb-3">
    <button class="social-auth-button" @click="handleClick">
      <img src="../../assets/site-assets/facebook-icon.png" alt="Facebook" class="social-login-buttons-icon me-2" />
      continuar com o facebook
    </button>
  </div>
  <div class="social-button mb-3">
    <button class="social-auth-button" @click="handleClick">
      <img src="../../assets/site-assets/google-icon.png" alt="Facebook" class="social-login-buttons-icon me-2" />
      continuar com o google
    </button>
  </div>

</template>

<style src="../../GlobalStyles/Login.css">
</style>
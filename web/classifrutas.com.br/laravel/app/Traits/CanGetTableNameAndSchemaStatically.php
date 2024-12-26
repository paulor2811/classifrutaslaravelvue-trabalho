<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

trait CanGetTableNameAndSchemaStatically
{
    public static function tableName()
    {
        return with(new static)->getTable();
    }

    public static function getTableSchema() {
        $cacheKey = 'TABLE_SCHEMA_' . with(new static)->getTable();

        $seconds = 3600 * 24; // 24 horas
        return Cache::remember($cacheKey, $seconds, function () {
            return Schema::getColumnListing(with(new static)->getTable());
        });
    }

    public static function refreshTableSchema() {
        $cacheKey = 'TABLE_SCHEMA_' . with(new static)->getTable();
        Cache::forget($cacheKey);
        self::getTableSchema();
    }


    public static function hasField($fieldName) {
        return in_array($fieldName, self::getTableSchema());
    }

}

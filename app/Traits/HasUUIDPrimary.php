<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUUIDPrimary
{
    protected static function bootHasUUIDPrimary(): void
    {
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    public function getIncrementing(): bool
    {
        return false;
    }
}

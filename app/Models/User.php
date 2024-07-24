<?php

namespace App\Models;

use App\Traits\HasUUIDPrimary;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasUUIDPrimary;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}

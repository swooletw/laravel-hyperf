<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
    ];
}

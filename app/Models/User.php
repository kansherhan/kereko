<?php

declare(strict_types=1);

namespace App\Models;

use App\Roles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Notifications\Notifiable;

class User extends AuthUser implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    public $fillable = [
        'username',
        'nickname',
        'email',
        'password'
    ];

    public function isFollower(): bool
    {
        return $this->role === Roles::FOLLOWER;
    }

    public function isModerator(): bool
    {
        return $this->role === Roles::MODERATOR;
    }

    public function isRedactor(): bool
    {
        return $this->role === Roles::REDACTOR;
    }

    public function isAdministrator(): bool
    {
        return $this->role === Roles::ADMINISTER;
    }
}

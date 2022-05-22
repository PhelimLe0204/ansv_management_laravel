<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_code',

        'name',
        'email',
        'password',

        'avatar',
        'enabled',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userRoles () {
        // Quan hệ bảng: Một users có nhiều user_roles (1-n)
        return $this->hasMany(UserRole::class, 'user', 'id');
    }

    public function pics () {
        // Quan hệ bảng: Một users có nhiều pic (1-n)
        return $this->hasMany(Pic::class, 'user_id', 'id');
    }
}

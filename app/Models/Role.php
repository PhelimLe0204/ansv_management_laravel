<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function userRoles () {
        // Quan hệ bảng: Một role có nhiều user_roles (1-n)
        return $this->hasMany(UserRole::class, 'role', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_roles';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function user () {
        // Quan hệ bảng: Một user_roles thuộc một users (1-1)
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function role () {
        // Quan hệ bảng: Một user_roles thuộc một role (1-1)
        return $this->belongsTo(Role::class, 'role', 'id');
    }
}

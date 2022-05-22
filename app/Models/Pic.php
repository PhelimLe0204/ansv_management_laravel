<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    use HasFactory;

    protected $table = 'pic';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function project () {
        // Quan hệ bảng: Một pic thuộc một project (1-1)
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function user () {
        // Quan hệ bảng: Một pic thuộc một user (1-1)
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function details () {
        // Quan hệ bảng: Một pic có nhiều detail (1-n)
        return $this->hasMany(Detail::class, 'pic_id', 'id');
    }
}

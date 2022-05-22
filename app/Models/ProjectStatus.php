<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $table = 'project_status';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function details () {
        // Quan hệ bảng: Một project_status có nhiều detail (1-n)
        return $this->hasMany(Detail::class, 'status_id', 'id');
    }
}

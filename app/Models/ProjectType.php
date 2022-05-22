<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    protected $table = 'project_type';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function details () {
        // Quan hệ bảng: Một project_type có nhiều detail (1-n)
        return $this->hasMany(Detail::class, 'type_id', 'id');
    }
}

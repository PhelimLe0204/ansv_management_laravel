<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticOfDetail extends Model
{
    use HasFactory;

    protected $table = 'statistic_of_detail';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function projectType () {
        // Quan hệ bảng: Một statistic_of_detail thuộc một project_type (1-1)
        return $this->belongsTo(ProjectType::class, 'type_id', 'id');
    }
}

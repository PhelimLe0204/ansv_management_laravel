<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;

    protected $table = 'priority';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function details () {
        // Quan hệ bảng: Một priority có nhiều detail (1-n)
        return $this->hasMany(Detail::class, 'priority_id', 'id');
    }
}

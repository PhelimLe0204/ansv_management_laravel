<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function projects () {
        // Quan hệ bảng: Một customer có nhiều project (1-n)
        return $this->hasMany(Project::class, 'customer_id', 'id');
    }
}

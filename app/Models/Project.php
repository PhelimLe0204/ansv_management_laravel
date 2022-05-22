<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function customer () {
        // Quan hệ bảng: Một project thuộc một customer (1-1)
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function pics () {
        // Quan hệ bảng: Một project có nhiều pic (1-n)
        return $this->hasMany(Pic::class, 'project_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyUnit extends Model
{
    use HasFactory;

    protected $table = 'currency_unit';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function details () {
        // Quan hệ bảng: Một currency_unit có nhiều detail (1-n)
        return $this->hasMany(Detail::class, 'currency_unit_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'detail';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function pic () {
        // Quan hệ bảng: Một detail thuộc một pic (1-1)
        return $this->belongsTo(Pic::class, 'pic_id', 'id');
    }

    public function projectType () {
        // Quan hệ bảng: Một detail thuộc một project_type (1-1)
        return $this->belongsTo(ProjectType::class, 'type_id', 'id');
    }

    public function priority () {
        // Quan hệ bảng: Một detail thuộc một priority (1-1)
        return $this->belongsTo(Priority::class, 'priority_id', 'id');
    }

    public function projectStatus () {
        // Quan hệ bảng: Một detail thuộc một project_status (1-1)
        return $this->belongsTo(ProjectStatus::class, 'status_id', 'id');
    }

    public function currencyUnit () {
        // Quan hệ bảng: Một detail thuộc một currency_unit (1-1)
        return $this->belongsTo(CurrencyUnit::class, 'currency_unit_id', 'id');
    }
}

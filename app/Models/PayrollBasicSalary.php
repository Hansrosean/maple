<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollBasicSalary extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'basic_salary',
        'effective_start_date',
        'effective_end_date'
    ];

    protected $casts = [
        'effective_start_date' => 'date',
        'effective_end_date' => 'date'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}

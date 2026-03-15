<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollDeductionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function deductions()
    {
        return $this->hasMany(PayrollDeduction::class, 'deduction_type_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollDeduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_employee_history_id',
        'deduction_type_id',
        'value',
        'description'
    ];

    public function payrollHistory()
    {
        return $this->belongsTo(PayrollEmployeeHistory::class, 'payroll_employee_history_id');
    }

    public function deductionType()
    {
        return $this->belongsTo(PayrollDeductionType::class, 'deduction_type_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollEmployeeHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'payroll_period_id',
        'basic_salary',
        'overtime_total',
        'allowance_total',
        'deduction_total',
        'gross_salary',
        'net_salary'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function period()
    {
        return $this->belongsTo(PayrollPeriod::class, 'payroll_period_id');
    }

    public function overtimes()
    {
        return $this->hasMany(PayrollOvertime::class, 'payroll_employee_history_id');
    }

    public function allowances()
    {
        return $this->hasMany(PayrollAllowance::class, 'payroll_employee_history_id');
    }

    public function deductions()
    {
        return $this->hasMany(PayrollDeduction::class, 'payroll_employee_history_id');
    }
}

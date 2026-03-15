<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollOvertime extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_employee_history_id',
        'hours',
        'rate',
        'total'
    ];

    public function payrollHistory()
    {
        return $this->belongsTo(PayrollEmployeeHistory::class, 'payroll_employee_history_id');
    }
}

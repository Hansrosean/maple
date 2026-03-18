<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_code',
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'birth_date',
        'hire_date',
        'employment_type',
        'employment_status',
        'department_id',
        'position_id'
    ];

    // set selalu 'ACTIVE' setiap data baru dibuat
    protected $attributes = [
        'employment_status' => 'Active',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'hire_date' => 'date'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function payrollHistories()
    {
        return $this->hasMany(PayrollEmployeeHistory::class, 'employee_id');
    }

    public function suggestions()
    {
        return $this->hasMany(SuggestionBox::class, 'employee_id');
    }
}

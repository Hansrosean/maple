<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class JobVacancyPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'department_id',
        'position_id',
        'employment_type',
        'registration_date_from',
        'registration_date_to',
        'status',
        'created_by'
    ];

    protected $casts = [
        'registration_date_from' => 'date',
        'registration_date_to' => 'date'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

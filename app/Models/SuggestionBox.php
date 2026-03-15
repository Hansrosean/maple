<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class SuggestionBox extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'content',
        'status',
        'response',
        'response_by',
        'response_at'
    ];

    protected $casts = [
        'response_at' => 'datetime'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function responder()
    {
        return $this->belongsTo(User::class, 'response_by');
    }
}

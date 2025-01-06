<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $primaryKey = 'id';

    protected $fillable = ['teamname', 'teammanager', 'teamemployees'];

    protected $casts = [
        'teamemployees' => 'array', // Cast as array
    ];
    // Relationship with employees
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_team', 'team_id', 'employee_id');
    }
}
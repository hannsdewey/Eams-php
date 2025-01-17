<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'position', 'address', 'mobile', 'age'];

    // Relationship with teams
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'employee_team', 'employee_id', 'team_id');
    }
}
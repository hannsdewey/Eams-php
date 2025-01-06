<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'manager';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'age'];

    /**
     * Relationship with teams (one-to-many).
     */
    public function teams()
    {
        return $this->hasMany(Team::class, 'teammanager', 'id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'work_place',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}

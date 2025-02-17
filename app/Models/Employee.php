<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'name',
        'photo',
        'place_of_birth',
        'address',
        'date_of_birth',
        'gender',
        'religion',
        'phone',
        'npwp',
        'unit_id',
        'position_id',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}

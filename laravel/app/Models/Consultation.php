<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id_clinique',
        'id_patient'
    ];

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}

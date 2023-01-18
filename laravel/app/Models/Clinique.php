<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinique extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lieu',
    ];

    public function medecin()
    {
        return $this->hasMany(Medecin::class);
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }

    public function specialisation()
    {
        return $this->hasMany(Specialisation::class);
    }
}

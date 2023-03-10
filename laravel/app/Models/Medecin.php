<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_clinique'
    ];

    public function clinique()
    {
        return $this->belongsTo(Clinique::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'phone'
    ];

    public function students()
    {
        return $this->hasMany(Alumno::class);
    }
}

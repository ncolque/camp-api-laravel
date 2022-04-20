<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'lastname', 'email', 'state', 'peruvian', 'assistance', 'phone', 'empresa_id'
    ];

    public function company()
    {
        return $this->belongsTo(Empresa::class);
    }
}

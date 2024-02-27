<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesors';

    protected $fillable = [
        'id',
        'senecaUser',
        'surname1',
        'surname2',
        'speciality'
    ];
    
    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }
}

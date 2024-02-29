<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'professors';

    protected $fillable = [
        'id',
        'senecaUser',
        'name',
        'surname1',
        'surname2',
        'speciality'
    ];
    
    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }
}

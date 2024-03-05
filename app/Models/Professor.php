<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Professor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'id',
        'seneca_user',
        'surname1',
        'surname2',
        'speciality'
    ];

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }

    public function toSearchableArray()
    {
        return [
            'seneca_user' => $this->seneca_user,
            'name' => $this->name,
            'surname1' => $this->surname1,
            'surname2' => $this->surname2,
            'speciality' => $this->speciality
        ];
    }
}

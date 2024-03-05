<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'id',
        'formation_id',
        'denomination',
        'acronym',
        'year',
        'speciality'
    ];

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }
    
    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }
}

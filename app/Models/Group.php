<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Group extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'groups';

    protected $fillable = [
        'id',
        'school_year',
        'formation_id',
        'year',
        'denomination',
        'shift'
    ];

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }

    public function toSearchableArray()
    {
        return [
            'school_year' => $this->school_year,
            'formations.acronym' => '',
            'year' => $this->year,
            'denomination' => $this->denomination,
            'shift' => $this->shift
        ];
    }
}

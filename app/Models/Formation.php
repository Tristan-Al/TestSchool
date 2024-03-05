<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Formation extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'formations';

    protected $fillable = [
        'id',
        'denomination',
        'acronym'
    ];

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function toSearchableArray()
    {
        return [
            'denomination' => $this->denomination,
            'acronym' => $this->acronym
        ];
    }
}

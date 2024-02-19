<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formation extends Model
{
    use HasFactory;
    
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
    
    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }
}

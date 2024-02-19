<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;
    
    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
    
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}

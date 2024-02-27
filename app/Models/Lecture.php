<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Professor;

class Lecture extends Model
{
    use HasFactory;

    protected $table = 'lectures';

    protected $fillable = [
        'id',
        'group_id',
        'subject_id',
        'professor_id',
        'hours'
    ];
    
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

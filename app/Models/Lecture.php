<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Professor;
use Laravel\Scout\Searchable;

class Lecture extends Model
{
    use HasFactory;
    use Searchable;

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

    public function toSearchableArray()
    {
        return [
            'groups.denomination' => '',
            'subjects.acronym' => '',
            'professors.name' => '',
            'professors.surname1' => '',
            'professors.surname2' => '',
            'hours' =>$this->hours
        ];
    }
}

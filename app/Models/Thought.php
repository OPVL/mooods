<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thought extends Model
{
    use HasFactory;

    protected $fillable = [
        'mood_id',
        'value',
    ];

    public function mood(): BelongsTo
    {
        return $this->belongsTo(Mood::class);
    }
}

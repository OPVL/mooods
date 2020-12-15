<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    use HasFactory;

    protected $fillable = [
        'value'
    ];
    
    public function thoughts()
    {
        return $this->hasMany(Thought::class);
    }
}

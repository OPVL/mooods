<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $table = 'theme_settings';

    protected $fillable = [
        'tags',
        'colourOne',
        'colourTwo',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'colourOne' => $this->colourOne,
            'colourTwo' => $this->colourTwo,
            'tags' => $this->tags,
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScaleSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'levels',
    ];

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'template' => $this->template,
            'levels' => $this->levelValues,
            'user' => $this->user_id
        ];
    }

    public function getTemplateAttribute(): string
    {
        // $path = config('scale.view_dir')
        return "scales::{$this->type}.root";
    }

    public function getLevelValuesAttribute(): array
    {
        $division = 10.0 / ($this->levels - 1);
        $levels = [];
        $value = 0.0;
        for ($i = 0; $i < $this->levels; $i++) {
            $levels[] = [
                'index' => $i,
                'value' => $value,
            ];
            $value = $value + $division;
        }
        return $levels;
    }
}

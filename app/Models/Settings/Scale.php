<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scale extends Model
{
    use HasFactory;

    protected $table = 'scale_settings';

    protected $fillable = [
        'type',
        'levels',
    ];

    public function settings(): BelongsTo
    {
        return $this->belongsTo(Settings::class);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'template' => $this->template,
            'levels' => $this->levelValues,
            // 'user' => $this->settings->user_id
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

<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class Settings extends Model
{
    use HasFactory;

    /** 
     * All child settings classes associated
     * @var array 
     */
    public static $children = [
        'dashboard',
        'scale',
        'theme',
    ];

    public function allSettings(): Collection
    {
        dd($this->relations);
        return collect();
    }

    public function dashboard(): HasOne
    {
        return $this->hasOne(Dashboard::class);
    }

    public function scale(): HasOne
    {
        return $this->hasOne(Scale::class);
    }

    public function theme(): HasOne
    {
        return $this->hasOne(Theme::class);
    }

    public function scopeWithAllSettings(Builder $query): Builder
    {
        return $query->with(self::$children);
    }
}

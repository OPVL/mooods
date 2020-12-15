<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Mood as MoodResource;
use App\Models\Mood;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MoodsController extends ApiController
{
    public function store(Request $request): JsonResource
    {
        return new MoodResource(new Mood());
    }

    public function destroy(Mood $mood, ): JsonResource
    {
        return new MoodResource(new Mood());
    }
}
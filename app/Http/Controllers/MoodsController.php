<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Inertia\Inertia;
use Inertia\Response;

class MoodsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Mood/Create');
    }

    public function create(): Response
    {
        return Inertia::render('Mood/Create', [
            'test' => 'Fuck off cunt',
        ]);
    }

    public function edit(Mood $mood): Response
    {
        return Inertia::render('Mood/Edit', compact('mood'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMood;
use App\Http\Requests\StoreThought;
use App\Models\Mood;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MoodThoughtController extends Controller
{
    public function create(Mood $mood): View
    {
        return view('pages.moods.thought.create');
    }


    public function store(Mood $mood, StoreThought $request): RedirectResponse
    {
        return redirect()->route('dashboard');
    }
}

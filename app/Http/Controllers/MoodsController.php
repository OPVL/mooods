<?php

namespace App\Http\Controllers;

use App\Actions\Mood\CreateMood;
use App\Http\Requests\StoreMood;
use App\Models\Mood;
use App\Models\Settings\Scale;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class MoodsController extends Controller
{
    public function index(): View
    {
        // disable old route
        $scalePrefs = (new Scale([
            'type' => 'dots',
            'levels' => 5,
        ]))->toArray();

        // ah joy I forgot about this fuckery. I'll fix it tomorrow

        $this->data = [
            'scale' => $scalePrefs, // user prefs
            'question' => 'ur a heddgehog, no?', // user prefs
            'route' => route('mood.store'),
        ];

        return view('pages.moods.create', $this->data);
    }

    public function create(): View
    {
        $this->data = [
            'scale' => Auth::user()->settings->scale->toArray(), // user prefs
            'question' => 'ur a heddgehog, no?', // user prefs
            'route' => route('mood.store'),
        ];

        return view('pages.moods.create', $this->data);
    }

    public function store(StoreMood $request, CreateMood $action): RedirectResponse
    {
        $result = $action->execute($request->validated());

        if ($result) {
            return redirect()->route('mood.index');
        }

        return redirect()->back();
    }

    public function edit(Mood $mood): Response
    {
        return Inertia::render('Mood/Edit', compact('mood'));
    }

    public function update(Mood $mood)
    {
    }

    public function destroy(Mood $mood)
    {
    }
}

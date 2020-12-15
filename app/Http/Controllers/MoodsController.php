<?php

namespace App\Http\Controllers;

use App\Actions\Mood\CreateMood;
use App\Http\Requests\StoreMood;
use App\Models\Mood;
use App\Models\ScaleSettings;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MoodsController extends Controller
{
    public function index(): View
    {
        // disable old route
        $scalePrefs = (new ScaleSettings([
            'type' => 'dots',
            'levels' => 7,
        ]))->toArray();

        $this->data = [
            'scale' => $scalePrefs, // user prefs
            'question' => 'ur a heddgehog, no?', // user prefs
            'route' => route('mood.store'),
        ];

        return view('pages.moods.create', $this->data);
    }

    public function create(): View
    {
        $scalePrefs = (new ScaleSettings([
            'type' => 'dots',
            'levels' => 7,
        ]))->toArray();

        $this->data = [
            'scale' => $scalePrefs, // user prefs
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

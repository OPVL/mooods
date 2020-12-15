<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $this->data['moods'] = Auth::user()->moods;
        return view('pages.dashboard', $this->data);
    }    
}

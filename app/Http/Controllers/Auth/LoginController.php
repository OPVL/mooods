<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function store(Login $request): RedirectResponse
    {
        $input = $request->validated();
        
       Auth::login(User::select('id')->whereEmail($input['email'])->firstOrFail(), Arr::has($input, 'remember'));

        return redirect()->intended(route('dashboard'));
    }
}
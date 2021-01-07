<?php

namespace App\Http\Controllers\Auth;

use App\Actions\User\CreateUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function store(Register $request, CreateUser $action): RedirectResponse
    {
        $input = $request->validated();

        $user = $action->execute($input);
        Auth::login($user);
        
        return redirect()->intended(route('dashboard'));
    }
}
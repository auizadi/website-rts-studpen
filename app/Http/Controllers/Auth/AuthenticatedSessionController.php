<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // flash message
        session()->flash('welcome', 'Selamat Datang, ' . Auth::user()->name . '!');
        // redirect based on role
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('instruktur.index');
        }
        if (Auth::user()->hasRole('instruktur')) {
            return redirect()->route('beranda-instruktur');
        }
        if (Auth::user()->hasRole('siswa')) {
            return redirect()->route('beranda-siswa');
        }
        return redirect()->route('dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

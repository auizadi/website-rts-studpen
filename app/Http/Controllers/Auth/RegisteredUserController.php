<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'program_studi' => ['required', 'string', 'max:255'],
            'nama_kampus' => ['required', 'string', 'max:255'],
            'kategori_mbkm' => ['required', 'in:XR,webdev'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'surat_pengantar' => ['required', 'file', 'mimes:pdf', 'max:2048'],

        ]);

        // simpan file ke storage/app/public/documents
        $cvPath = $request->file('cv')->store('documents/cv', 'public');
        $suratPath = $request->file('surat_pengantar')->store('documents/surat_pengantar', 'public');

        $user = User::create([
            'name' => $request->name,
            'program_studi' => $request->program_studi,
            'nama_kampus' => $request->nama_kampus,
            'kategori_mbkm' => $request->kategori_mbkm,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cv' => $cvPath,
            'surat_pengantar' => $suratPath,

        ]);

        // assign role siswa secara otomatis
        $user->assignRole('siswa');
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('homepage-student');
    }
}

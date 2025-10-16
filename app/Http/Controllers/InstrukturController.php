<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class InstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pendaftaran()
    {
        $pendaftars = User::role('siswa')->get();
        return view('admin.instruktur.pendaftaran', compact('pendaftars'));
    }

    public function updateStatus(Request $request, $id){
        $request->validate([
            'status' => 'required|in:pending,diterima,ditolak'
        ]);

        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->save();

        return back()->with('success', 'Status mahasiswa berhasil diperbaharui.');

    }

    public function index()
    {
        $instrukturs = User::role('instruktur')->get();
        return view('admin.instruktur.index', compact('instrukturs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instruktur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // assign instruktur role
        $user->assignRole('instruktur');

        return redirect()->route('instruktur.index')->with('success_make', 'Akun instruktur berhasi dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // make sure just instructor account can delete
        if ($user->hasRole('instruktur')) {
            $user->delete();
            return redirect()->route('instruktur.index')->with('success_delete', 'Akun instruktur berhasil dihapus!');
        }
        if ($user->hasRole('admin')) {
            return redirect()->route('instruktur.index')->with('error', 'Hanya akun instruktur yang dapat dihapus!');
        }
    }


}

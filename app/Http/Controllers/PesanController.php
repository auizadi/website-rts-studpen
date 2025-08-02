<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Routing\Controller; // Ensure the correct Controller class is imported
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesans = Pesan::with('user')->latest()->paginate(10);
        return view('admin.pesan-pengguna', compact('pesans'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi lebih ketat
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|exists:users,email',
            'pesan' => 'required|string|max:1000' // Pastikan nama field sama dengan form
        ]);

        // Dapatkan user berdasarkan email
        $user = User::where('email', $validatedData['email'])->firstOrFail();

        // Simpan pesan
        $pesan = new Pesan();
        $pesan->nama_pengirim = $validatedData['nama'];
        $pesan->content = $validatedData['pesan']; // Pastikan menggunakan nama field yang benar
        $pesan->user_id = $user->id;
        $pesan->save();

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}

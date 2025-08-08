<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\PesanController;
use App\Livewire\Beranda;
use App\Livewire\LearningSystem;
use App\Models\Pesan;

Route::get('/', function () {
    return view('landing');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// messages
Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('kirimPesan');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/instruktur/index', [InstrukturController::class, 'index'])->name('instruktur.index');
    Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');
    Route::get('/instruktur/create', [InstrukturController::class, 'create'])->name('instruktur.create');
    Route::post('/instruktur', [InstrukturController::class, 'store'])->name('instruktur.store');
    Route::delete('/instruktur/{id}', [InstrukturController::class, 'destroy'])->name('instruktur.destroy');
});

// SPA livewire
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/beranda', Beranda::class)->name('beranda');
});




require __DIR__ . '/auth.php';

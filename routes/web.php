<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\PesanController;
use App\Livewire\Akun;
use App\Livewire\BerandaInstruktur;
use App\Livewire\BerandaSiswa;
use App\Livewire\BuatSoal;
use App\Livewire\HomepageStudent;
use App\Livewire\KerjakanSoal;
use App\Livewire\LearningSystem;
use App\Livewire\QuestionForm;
use App\Livewire\QuizPage;
use App\Livewire\ShowMateri;
use App\Livewire\ShowSoal;
use App\Livewire\Soal;
use App\Livewire\TambahMateri;
use App\Models\Materi;
use Illuminate\Support\Facades\Response;


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
    Route::get('/akun', Akun::class)->name('akun');
    Route::get('/soal', Soal::class)->name('soal');
});

// messages
Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('kirimPesan');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/instruktur/index', [InstrukturController::class, 'index'])->name('instruktur.index');
    Route::get('/pendaftaran-mbkm', [InstrukturController::class, 'pendaftaran'])->name('pendaftaran');
    Route::patch('/pendaftaran-mbkm/mahasiswa/{id}/update-status', [InstrukturController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');
    Route::get('/instruktur/create', [InstrukturController::class, 'create'])->name('instruktur.create');
    Route::post('/instruktur', [InstrukturController::class, 'store'])->name('instruktur.store');
    Route::delete('/instruktur/{id}', [InstrukturController::class, 'destroy'])->name('instruktur.destroy');
});

// SPA livewire
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('homepage-student', HomepageStudent::class)->name('homepage-student');
    Route::get('kerjakan/{quiz}', KerjakanSoal::class)->name('kerjakan-soal');
    Route::get('/review-soal/{quiz}', ShowSoal::class)->name('detail-soal-siswa');
    Route::get('materi-siswa', ShowMateri::class)->name('materi-siswa');
    // preview materi
    Route::get('materi-siswa/view/{id}', function ($id) {
        $materi = Materi::findOrFail($id);
        $path = storage_path('app/public/' . $materi->file_path);

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $materi->file_name . '"'
        ]);
    })->name('materi-view');
});

Route::middleware(['auth', 'role:instruktur'])->group(function () {
    Route::get('/beranda', BerandaInstruktur::class)->name('beranda-instruktur');
    Route::get('/buat-soal/{quiz}', BuatSoal::class)->name('buat-soal');
    Route::get('/detail-soal/{quiz}', ShowSoal::class)->name('detail-soal');
    Route::get('/tambah-materi', TambahMateri::class)->name('tambah-materi');
});


require __DIR__ . '/auth.php';

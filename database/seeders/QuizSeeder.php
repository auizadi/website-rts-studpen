<?php

namespace Database\Seeders;

use App\Models\Options;
use App\Models\Questions;
use App\Models\Quizzes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat quiz
        $quiz = Quizzes::create([
            'nama_soal' => 'Pemrograman Web',
            'is_published' => false,
        ]);

        // buat pertanyaan pertama
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk bahasa pemrograman web adalah ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'PHP', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'Inggris', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Rusia', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Polandia', 'is_correct' => false]);

        // buat pertanyaan kedua
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk framework PHP adalah ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'Laravel', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'SpringBoot', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Flutter', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Nextjs', 'is_correct' => false]);

        // buat pertanyaan ketiga
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk library CSS ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'Tailwind', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'Nuxt', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Hapi', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Nest', 'is_correct' => false]);

        // buat pertanyaan keempat
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk framework Javascript ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'Vue', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'Laravel', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Livewire', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Codeigniter', 'is_correct' => false]);

        // buat pertanyaan kelima
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk loop pada PHP, kecuali ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'Array', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'Foreach', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'For', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'While', 'is_correct' => false]);

        // buat pertanyaan keenam
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk DBMS, kecuali ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'Apache', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'PostGree', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'MySql', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'Sqlite', 'is_correct' => false]);

        // buat pertanyaan ketujuh
        $question = Questions::create([
            'quiz_id' => $quiz->id,
            'pertanyaan' => 'Di bawah ini yang termasuk query pada SQL, kecuali ?',
        ]);

        // jawaban
        Options::create(['question_id' => $question->id, 'teks' => 'php artisan serve', 'is_correct' => true]);
        Options::create(['question_id' => $question->id, 'teks' => 'select', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'join', 'is_correct' => false]);
        Options::create(['question_id' => $question->id, 'teks' => 'insert', 'is_correct' => false]);
    }
}

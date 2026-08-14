<?php

namespace Database\Seeders;

use App\Models\QuestionBank;
use Illuminate\Database\Seeder;

class QuestionBankSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'question_text' => 'Apa kepanjangan dari HTML?',
                'type' => 'pilihan_ganda',
                'options' => ['Hyper Text Markup Language', 'High Tech Modern Language', 'Home Tool Markup Language', 'Hyperlink Text Management Language'],
                'correct_answer' => 'A',
                'points' => 2,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Manakah yang merupakan tipe data primitif?',
                'type' => 'pilihan_ganda',
                'options' => ['Array', 'String', 'Object', 'Class'],
                'correct_answer' => 'B',
                'points' => 2,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'CSS digunakan untuk mengatur tampilan halaman web.',
                'type' => 'benar_salah',
                'options' => null,
                'correct_answer' => 'benar',
                'points' => 1,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Sebutkan 3 tipe data dasar dalam pemrograman!',
                'type' => 'isian_singkat',
                'options' => null,
                'correct_answer' => 'integer, string, boolean',
                'points' => 3,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Jelaskan perbedaan antara variabel lokal dan variabel global!',
                'type' => 'essay',
                'options' => null,
                'correct_answer' => null,
                'points' => 5,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Manakah perangkat lunak yang digunakan untuk mengelola basis data?',
                'type' => 'pilihan_ganda',
                'options' => ['Microsoft Word', 'MySQL', 'Notepad', 'Photoshop'],
                'correct_answer' => 'B',
                'points' => 2,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Apa fungsi dari perulangan (looping) dalam pemrograman?',
                'type' => 'pilihan_ganda',
                'options' => ['Menyimpan data', 'Mengulang sebuah blok kode', 'Membuat fungsi', 'Menghapus variabel'],
                'correct_answer' => 'B',
                'points' => 2,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'JSON merupakan format pertukaran data berbasis teks.',
                'type' => 'benar_salah',
                'options' => null,
                'correct_answer' => 'benar',
                'points' => 1,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Apa itu Algoritma?',
                'type' => 'essay',
                'options' => null,
                'correct_answer' => null,
                'points' => 5,
                'created_by' => 2,
                'subject_id' => 1,
            ],
            [
                'question_text' => 'Perintah yang digunakan untuk mencetak output di PHP adalah...',
                'type' => 'isian_singkat',
                'options' => null,
                'correct_answer' => 'echo atau print',
                'points' => 2,
                'created_by' => 2,
                'subject_id' => 1,
            ],
        ];

        foreach ($questions as $question) {
            QuestionBank::create($question);
        }
    }
}

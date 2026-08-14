<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            // UTS Algoritma (exam_id=1) - 5 questions
            [
                'exam_id' => 1,
                'question_text' => 'Apa kepanjangan dari HTML?',
                'type' => 'pilihan_ganda',
                'options' => ['Hyper Text Markup Language', 'High Tech Modern Language', 'Home Tool Markup Language', 'Hyperlink Text Management Language'],
                'correct_answer' => 'A',
                'points' => 2,
                'question_bank_id' => 1,
            ],
            [
                'exam_id' => 1,
                'question_text' => 'CSS digunakan untuk mengatur tampilan halaman web.',
                'type' => 'benar_salah',
                'options' => null,
                'correct_answer' => 'benar',
                'points' => 1,
                'question_bank_id' => 3,
            ],
            [
                'exam_id' => 1,
                'question_text' => 'Sebutkan 3 tipe data dasar dalam pemrograman!',
                'type' => 'isian_singkat',
                'options' => null,
                'correct_answer' => 'integer, string, boolean',
                'points' => 3,
                'question_bank_id' => 4,
            ],
            [
                'exam_id' => 1,
                'question_text' => 'Manakah yang merupakan tipe data primitif?',
                'type' => 'pilihan_ganda',
                'options' => ['Array', 'String', 'Object', 'Class'],
                'correct_answer' => 'B',
                'points' => 2,
                'question_bank_id' => 2,
            ],
            [
                'exam_id' => 1,
                'question_text' => 'Jelaskan perbedaan antara variabel lokal dan variabel global!',
                'type' => 'essay',
                'options' => null,
                'correct_answer' => null,
                'points' => 5,
                'question_bank_id' => 5,
            ],

            // UAS Algoritma (exam_id=2) - 5 questions
            [
                'exam_id' => 2,
                'question_text' => 'Manakah perangkat lunak yang digunakan untuk mengelola basis data?',
                'type' => 'pilihan_ganda',
                'options' => ['Microsoft Word', 'MySQL', 'Notepad', 'Photoshop'],
                'correct_answer' => 'B',
                'points' => 2,
                'question_bank_id' => 6,
            ],
            [
                'exam_id' => 2,
                'question_text' => 'Apa fungsi dari perulangan (looping) dalam pemrograman?',
                'type' => 'pilihan_ganda',
                'options' => ['Menyimpan data', 'Mengulang sebuah blok kode', 'Membuat fungsi', 'Menghapus variabel'],
                'correct_answer' => 'B',
                'points' => 2,
                'question_bank_id' => 7,
            ],
            [
                'exam_id' => 2,
                'question_text' => 'JSON merupakan format pertukaran data berbasis teks.',
                'type' => 'benar_salah',
                'options' => null,
                'correct_answer' => 'benar',
                'points' => 1,
                'question_bank_id' => 8,
            ],
            [
                'exam_id' => 2,
                'question_text' => 'Perintah yang digunakan untuk mencetak output di PHP adalah...',
                'type' => 'isian_singkat',
                'options' => null,
                'correct_answer' => 'echo atau print',
                'points' => 2,
                'question_bank_id' => 10,
            ],
            [
                'exam_id' => 2,
                'question_text' => 'Apa itu Algoritma? Jelaskan dengan contoh!',
                'type' => 'essay',
                'options' => null,
                'correct_answer' => null,
                'points' => 5,
                'question_bank_id' => 9,
            ],

            // UTS Bahasa Indonesia (exam_id=3) - 5 questions
            [
                'exam_id' => 3,
                'question_text' => 'Struktur teks eksposisi terdiri dari...',
                'type' => 'pilihan_ganda',
                'options' => ['Tesis, argumen, penegasan ulang', 'Pendapat, bukti, kesimpulan', 'Judul, isi, penutup', 'Awal, tengah, akhir'],
                'correct_answer' => 'A',
                'points' => 2,
            ],
            [
                'exam_id' => 3,
                'question_text' => 'Teks berita harus ditulis secara objektif.',
                'type' => 'benar_salah',
                'options' => null,
                'correct_answer' => 'benar',
                'points' => 1,
            ],
            [
                'exam_id' => 3,
                'question_text' => 'Sebutkan 3 unsur intrinsik cerpen!',
                'type' => 'isian_singkat',
                'options' => null,
                'correct_answer' => 'tema, alur, karakter',
                'points' => 3,
            ],
            [
                'exam_id' => 3,
                'question_text' => 'Sinonim dari kata "cantik" adalah...',
                'type' => 'pilihan_ganda',
                'options' => ['Indah', 'Ganteng', 'Tinggi', 'Kuat'],
                'correct_answer' => 'A',
                'points' => 1,
            ],
            [
                'exam_id' => 3,
                'question_text' => 'Buatlah paragraf argumentasi tentang pentingnya belajar!',
                'type' => 'essay',
                'options' => null,
                'correct_answer' => null,
                'points' => 5,
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}

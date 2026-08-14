<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $lessons = [
            [
                'name' => 'Pengenalan Algoritma dan Pemrograman',
                'class_id' => 1,
                'teacher_id' => 2,
                'description' => 'Materi tentang pengenalan algoritma, flowchart, dan dasar-dasar pemrograman',
            ],
            [
                'name' => 'Variabel dan Tipe Data',
                'class_id' => 1,
                'teacher_id' => 2,
                'description' => 'Pembahasan mengenai variabel, tipe data, dan deklarasi variabel dalam pemrograman',
            ],
            [
                'name' => 'Struktur Kondisi (If-Else)',
                'class_id' => 1,
                'teacher_id' => 2,
                'description' => 'Materi tentang penggunaan struktur kondisi if-else dalam pengambilan keputusan',
            ],
            [
                'name' => 'Perulangan (Looping)',
                'class_id' => 3,
                'teacher_id' => 4,
                'description' => 'Pembahasan tentang perulangan for, while, dan do-while',
            ],
            [
                'name' => 'Array dan String',
                'class_id' => 3,
                'teacher_id' => 4,
                'description' => 'Materi tentang array satu dimensi, dua dimensi, dan manipulasi string',
            ],
            [
                'name' => 'Fungsi dan Prosedur',
                'class_id' => 5,
                'teacher_id' => 2,
                'description' => 'Pembahasan tentang deklarasi dan pemanggilan fungsi serta prosedur',
            ],
            [
                'name' => 'Struktur Data Dasar',
                'class_id' => 5,
                'teacher_id' => 2,
                'description' => 'Materi tentang stack, queue, linked list, dan tree',
            ],
            [
                'name' => 'Pengenalan HTML dan CSS',
                'class_id' => 2,
                'teacher_id' => 3,
                'description' => 'Materi dasar pembuatan halaman web menggunakan HTML dan CSS',
            ],
            [
                'name' => 'JavaScript Dasar',
                'class_id' => 4,
                'teacher_id' => 5,
                'description' => 'Pengenalan JavaScript, DOM manipulation, dan event handling',
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}

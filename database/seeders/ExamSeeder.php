<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        $exams = [
            [
                'name' => 'UTS Algoritma Pemrograman',
                'class_id' => 1,
                'teacher_id' => 2,
                'subject_id' => 1,
                'date' => '2026-03-20',
                'start_time' => '08:00',
                'end_time' => '09:30',
                'type' => 'uts',
                'anti_curang' => true,
            ],
            [
                'name' => 'UAS Algoritma Pemrograman',
                'class_id' => 1,
                'teacher_id' => 2,
                'subject_id' => 1,
                'date' => '2026-06-10',
                'start_time' => '08:00',
                'end_time' => '10:00',
                'type' => 'uas',
                'anti_curang' => true,
            ],
            [
                'name' => 'UTS Bahasa Indonesia',
                'class_id' => 1,
                'teacher_id' => 3,
                'subject_id' => 2,
                'date' => '2026-03-22',
                'start_time' => '10:00',
                'end_time' => '11:30',
                'type' => 'uts',
                'anti_curang' => false,
            ],
            [
                'name' => 'UH Matematika Minggu 3',
                'class_id' => 3,
                'teacher_id' => 2,
                'subject_id' => 1,
                'date' => '2026-01-23',
                'start_time' => '08:00',
                'end_time' => '08:45',
                'type' => 'uh',
                'anti_curang' => false,
            ],
            [
                'name' => 'PAT Algoritma Kelas XII',
                'class_id' => 5,
                'teacher_id' => 2,
                'subject_id' => 1,
                'date' => '2026-06-15',
                'start_time' => '08:00',
                'end_time' => '10:00',
                'type' => 'pat',
                'anti_curang' => true,
            ],
            [
                'name' => 'Tryout Ujian Nasional',
                'class_id' => 5,
                'teacher_id' => 2,
                'subject_id' => 1,
                'date' => '2026-05-20',
                'start_time' => '07:30',
                'end_time' => '10:00',
                'type' => 'tryout',
                'anti_curang' => true,
            ],
        ];

        foreach ($exams as $exam) {
            Exam::create($exam);
        }
    }
}

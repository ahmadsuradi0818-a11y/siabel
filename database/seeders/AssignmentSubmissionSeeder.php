<?php

namespace Database\Seeders;

use App\Models\AssignmentSubmission;
use Illuminate\Database\Seeder;

class AssignmentSubmissionSeeder extends Seeder
{
    public function run(): void
    {
        $submissions = [
            // Budi (student_id=1) submits flowchart assignment
            [
                'assignment_id' => 1,
                'student_id' => 1,
                'notes' => 'Sudah saya buat flowchartnya Pak',
                'score' => 85,
                'submitted_at' => '2026-02-14 20:00:00',
            ],
            // Andi (student_id=2) submits flowchart assignment
            [
                'assignment_id' => 1,
                'student_id' => 2,
                'notes' => 'Ini tugas flowchart saya',
                'score' => 90,
                'submitted_at' => '2026-02-13 18:30:00',
            ],
            // Budi submits Bahasa Indonesia assignment
            [
                'assignment_id' => 2,
                'student_id' => 1,
                'notes' => 'Teks eksposisi tentang teknologi dan pendidikan',
                'score' => 78,
                'submitted_at' => '2026-02-19 22:00:00',
            ],
            // Rina (student_id=3) submits kalkulator assignment
            [
                'assignment_id' => 3,
                'student_id' => 3,
                'notes' => 'Program kalkulator dengan fitur tambah, kurang, kali, bagi',
                'score' => 92,
                'submitted_at' => '2026-02-24 15:00:00',
            ],
            // Dimas (student_id=4) submits kalkulator assignment
            [
                'assignment_id' => 3,
                'student_id' => 4,
                'notes' => 'Sudah lengkap dengan validasi input',
                'score' => 88,
                'submitted_at' => '2026-02-24 20:00:00',
            ],
        ];

        foreach ($submissions as $submission) {
            AssignmentSubmission::create($submission);
        }
    }
}

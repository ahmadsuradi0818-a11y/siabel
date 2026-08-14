<?php

namespace Database\Seeders;

use App\Models\StudentGrade;
use Illuminate\Database\Seeder;

class StudentGradeSeeder extends Seeder
{
    public function run(): void
    {
        $grades = [
            // Class 1 - Academic Year 4 (2025/2026 sem 2)
            [
                'student_id' => 1, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 95, 'assignment_score' => 85, 'daily_test_avg' => 80, 'midterm_score' => 78, 'final_score' => 82, 'final_grade' => 82.40,
                'teacher_notes' => 'Perlu meningkatkan kemampuan menyelesaikan soal cerita',
            ],
            [
                'student_id' => 1, 'subject_id' => 2, 'subject_name' => 'Bahasa Indonesia', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 3,
                'attendance_score' => 95, 'assignment_score' => 78, 'daily_test_avg' => 75, 'midterm_score' => 80, 'final_score' => 78, 'final_grade' => 79.20,
                'teacher_notes' => 'Cukup baik dalam menulis',
            ],
            [
                'student_id' => 1, 'subject_id' => 3, 'subject_name' => 'Bahasa Inggris', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 3,
                'attendance_score' => 90, 'assignment_score' => 70, 'daily_test_avg' => 65, 'midterm_score' => 72, 'final_score' => 70, 'final_grade' => 71.40,
                'teacher_notes' => 'Perlu latihan vocabulary dan speaking',
            ],
            [
                'student_id' => 1, 'subject_id' => 4, 'subject_name' => 'IPA', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 95, 'assignment_score' => 88, 'daily_test_avg' => 82, 'midterm_score' => 85, 'final_score' => 86, 'final_grade' => 86.00,
                'teacher_notes' => 'Sangat baik dalam praktikum',
            ],

            [
                'student_id' => 2, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 100, 'assignment_score' => 90, 'daily_test_avg' => 88, 'midterm_score' => 85, 'final_score' => 90, 'final_grade' => 89.40,
                'teacher_notes' => 'Prestasi sangat baik, terus pertahankan',
            ],
            [
                'student_id' => 2, 'subject_id' => 2, 'subject_name' => 'Bahasa Indonesia', 'class_id' => 1, 'academic_year_id' => 4, 'teacher_id' => 3,
                'attendance_score' => 100, 'assignment_score' => 85, 'daily_test_avg' => 82, 'midterm_score' => 88, 'final_score' => 85, 'final_grade' => 86.00,
                'teacher_notes' => 'Aktif di kelas',
            ],

            // Class 3 - Academic Year 4
            [
                'student_id' => 5, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 3, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 85, 'assignment_score' => 75, 'daily_test_avg' => 70, 'midterm_score' => 72, 'final_score' => 75, 'final_grade' => 75.00,
                'teacher_notes' => 'Perlu peningkatan konsistensi belajar',
            ],
            [
                'student_id' => 6, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 3, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 95, 'assignment_score' => 82, 'daily_test_avg' => 80, 'midterm_score' => 82, 'final_score' => 80, 'final_grade' => 81.20,
                'teacher_notes' => 'Pengembangan logika sudah baik',
            ],

            // Class 5 - Academic Year 4
            [
                'student_id' => 7, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 5, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 100, 'assignment_score' => 95, 'daily_test_avg' => 92, 'midterm_score' => 90, 'final_score' => 95, 'final_grade' => 94.00,
                'teacher_notes' => 'Lulusan terbaik, sangat kompeten di bidang pemrograman',
            ],
            [
                'student_id' => 8, 'subject_id' => 1, 'subject_name' => 'Matematika', 'class_id' => 5, 'academic_year_id' => 4, 'teacher_id' => 2,
                'attendance_score' => 90, 'assignment_score' => 80, 'daily_test_avg' => 78, 'midterm_score' => 82, 'final_score' => 80, 'final_grade' => 80.60,
                'teacher_notes' => 'Cukup baik, perlu peningkatan di bagian logika pemrograman',
            ],
        ];

        foreach ($grades as $grade) {
            StudentGrade::create($grade);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\ExamResult;
use App\Models\ExamAnswer;
use Illuminate\Database\Seeder;

class ExamResultSeeder extends Seeder
{
    public function run(): void
    {
        // Student Budi (user_id=6, student_id=1) takes UTS Algoritma (exam_id=1)
        $budiUts = ExamResult::create([
            'exam_id' => 1,
            'student_id' => 1,
            'score' => 78,
            'is_blocked' => false,
            'started_at' => '2026-03-20 08:00:00',
        ]);

        ExamAnswer::create(['exam_id' => 1, 'student_id' => 1, 'question_id' => 1, 'answer' => 'A', 'is_correct' => true, 'points_earned' => 2]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 1, 'question_id' => 2, 'answer' => 'benar', 'is_correct' => true, 'points_earned' => 1]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 1, 'question_id' => 3, 'answer' => 'integer, float, string', 'is_correct' => true, 'points_earned' => 3]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 1, 'question_id' => 4, 'answer' => 'B', 'is_correct' => false, 'points_earned' => 0]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 1, 'question_id' => 5, 'answer' => 'Variabel lokal hanya bisa diakses di dalam fungsi, sedangkan variabel global bisa diakses di mana saja.', 'is_correct' => true, 'points_earned' => 4]);

        // Student Andi (user_id=7, student_id=2) takes UTS Algoritma (exam_id=1)
        $andiUts = ExamResult::create([
            'exam_id' => 1,
            'student_id' => 2,
            'score' => 85,
            'is_blocked' => false,
            'started_at' => '2026-03-20 08:00:00',
        ]);

        ExamAnswer::create(['exam_id' => 1, 'student_id' => 2, 'question_id' => 1, 'answer' => 'A', 'is_correct' => true, 'points_earned' => 2]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 2, 'question_id' => 2, 'answer' => 'benar', 'is_correct' => true, 'points_earned' => 1]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 2, 'question_id' => 3, 'answer' => 'integer, string, boolean', 'is_correct' => true, 'points_earned' => 3]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 2, 'question_id' => 4, 'answer' => 'B', 'is_correct' => true, 'points_earned' => 2]);
        ExamAnswer::create(['exam_id' => 1, 'student_id' => 2, 'question_id' => 5, 'answer' => 'Variabel lokal dideklarasi di dalam fungsi, global di luar fungsi.', 'is_correct' => true, 'points_earned' => 5]);

        // Student Rina (user_id=8, student_id=3) takes UTS Bahasa Indonesia (exam_id=3)
        $rinaUts = ExamResult::create([
            'exam_id' => 3,
            'student_id' => 3,
            'score' => 82,
            'is_blocked' => false,
            'started_at' => '2026-03-22 10:00:00',
        ]);

        ExamAnswer::create(['exam_id' => 3, 'student_id' => 3, 'question_id' => 11, 'answer' => 'A', 'is_correct' => true, 'points_earned' => 2]);
        ExamAnswer::create(['exam_id' => 3, 'student_id' => 3, 'question_id' => 12, 'answer' => 'benar', 'is_correct' => true, 'points_earned' => 1]);
        ExamAnswer::create(['exam_id' => 3, 'student_id' => 3, 'question_id' => 13, 'answer' => 'tema, amanat, sudut pandang', 'is_correct' => true, 'points_earned' => 3]);
        ExamAnswer::create(['exam_id' => 3, 'student_id' => 3, 'question_id' => 14, 'answer' => 'A', 'is_correct' => true, 'points_earned' => 1]);
        ExamAnswer::create(['exam_id' => 3, 'student_id' => 3, 'question_id' => 15, 'answer' => 'Belajar sangat penting karena...', 'is_correct' => true, 'points_earned' => 4]);

        // Dimas (student_id=4) takes UH Matematika (exam_id=4)
        ExamResult::create([
            'exam_id' => 4,
            'student_id' => 4,
            'score' => 90,
            'is_blocked' => false,
            'started_at' => '2026-01-23 08:00:00',
        ]);

        // Fajar (student_id=6) takes PAT (exam_id=5)
        ExamResult::create([
            'exam_id' => 5,
            'student_id' => 6,
            'score' => 75,
            'is_blocked' => false,
            'started_at' => '2026-06-15 08:00:00',
        ]);

        // Yoga (student_id=7) takes PAT (exam_id=5)
        ExamResult::create([
            'exam_id' => 5,
            'student_id' => 7,
            'score' => 88,
            'is_blocked' => false,
            'started_at' => '2026-06-15 08:00:00',
        ]);
    }
}

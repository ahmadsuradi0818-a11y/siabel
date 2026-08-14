<?php

namespace Database\Seeders;

use App\Models\ReportCard;
use App\Models\ReportCardSubject;
use App\Models\ReportCardExtracurricular;
use Illuminate\Database\Seeder;

class ReportCardSeeder extends Seeder
{
    public function run(): void
    {
        // Report card for Budi (student_id=1)
        $budi = ReportCard::create([
            'student_id' => 1,
            'academic_year_id' => 4,
            'class_id' => 1,
            'homeroom_teacher_id' => 2,
            'attitude_religious' => 'Sangat Baik - Taat beribadah dan menghormati sesama',
            'attitude_social' => 'Baik - Rajin, disiplin, dan pekerja keras',
            'homeroom_notes' => 'Budi adalah siswa yang rajin dan disiplin. Perlu peningkatan di bidang akademik terutama matematika.',
            'attendance_sick' => 2,
            'attendance_permit' => 1,
            'attendance_absent' => 0,
            'status' => 'finalized',
        ]);

        ReportCardSubject::create(['report_card_id' => $budi->id, 'subject_id' => 1, 'subject_name' => 'Matematika', 'daily_test_avg' => 80, 'midterm_score' => 78, 'final_score' => 82, 'final_grade' => 82.40, 'teacher_notes' => 'Perlu peningkatan']);
        ReportCardSubject::create(['report_card_id' => $budi->id, 'subject_id' => 2, 'subject_name' => 'Bahasa Indonesia', 'daily_test_avg' => 75, 'midterm_score' => 80, 'final_score' => 78, 'final_grade' => 79.20, 'teacher_notes' => 'Cukup baik']);
        ReportCardSubject::create(['report_card_id' => $budi->id, 'subject_id' => 3, 'subject_name' => 'Bahasa Inggris', 'daily_test_avg' => 65, 'midterm_score' => 72, 'final_score' => 70, 'final_grade' => 71.40, 'teacher_notes' => 'Perlu latihan']);
        ReportCardSubject::create(['report_card_id' => $budi->id, 'subject_id' => 4, 'subject_name' => 'IPA', 'daily_test_avg' => 82, 'midterm_score' => 85, 'final_score' => 86, 'final_grade' => 86.00, 'teacher_notes' => 'Baik']);

        ReportCardExtracurricular::create(['report_card_id' => $budi->id, 'activity_name' => 'Robotik', 'description' => 'Aktif dan berkontribusi dalam kompetisi']);
        ReportCardExtracurricular::create(['report_card_id' => $budi->id, 'activity_name' => 'Futsal', 'description' => 'Anggota aktif tim futsal sekolah']);

        // Report card for Andi (student_id=2)
        $andi = ReportCard::create([
            'student_id' => 2,
            'academic_year_id' => 4,
            'class_id' => 1,
            'homeroom_teacher_id' => 2,
            'attitude_religious' => 'Sangat Baik - Teladan dalam beribadah',
            'attitude_social' => 'Sangat Baik - Aktif, kreatif, dan suka menolong',
            'homeroom_notes' => 'Andi adalah siswa berprestasi. Selalu berusaha memberikan yang terbaik.',
            'attendance_sick' => 1,
            'attendance_permit' => 0,
            'attendance_absent' => 0,
            'status' => 'finalized',
        ]);

        ReportCardSubject::create(['report_card_id' => $andi->id, 'subject_id' => 1, 'subject_name' => 'Matematika', 'daily_test_avg' => 88, 'midterm_score' => 85, 'final_score' => 90, 'final_grade' => 89.40, 'teacher_notes' => 'Prestasi sangat baik']);
        ReportCardSubject::create(['report_card_id' => $andi->id, 'subject_id' => 2, 'subject_name' => 'Bahasa Indonesia', 'daily_test_avg' => 82, 'midterm_score' => 88, 'final_score' => 85, 'final_grade' => 86.00, 'teacher_notes' => 'Aktif di kelas']);

        ReportCardExtracurricular::create(['report_card_id' => $andi->id, 'activity_name' => 'Programing Club', 'description' => 'Juara 2 lomba pemrograman tingkat kabupaten']);

        // Report card for Fajar (student_id=6) - Class XII
        $fajar = ReportCard::create([
            'student_id' => 6,
            'academic_year_id' => 4,
            'class_id' => 5,
            'homeroom_teacher_id' => 2,
            'attitude_religious' => 'Baik',
            'attitude_social' => 'Baik - Mandiri dan bertanggung jawab',
            'homeroom_notes' => 'Fajar menunjukkan kemajuan yang signifikan selama di kelas XII.',
            'attendance_sick' => 3,
            'attendance_permit' => 2,
            'attendance_absent' => 1,
            'status' => 'draft',
        ]);

        ReportCardSubject::create(['report_card_id' => $fajar->id, 'subject_id' => 1, 'subject_name' => 'Matematika', 'daily_test_avg' => 92, 'midterm_score' => 90, 'final_score' => 95, 'final_grade' => 94.00, 'teacher_notes' => 'Lulusan terbaik']);

        ReportCardExtracurricular::create(['report_card_id' => $fajar->id, 'activity_name' => 'Programing Club', 'description' => 'Ketua programing club, juara 1 lomba pemrograman provinsi']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSubjectSeeder extends Seeder
{
    public function run(): void
    {
        $teacherSubjects = [
            // Ahmad (user_id=2) teaches Matematika and IPA
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 2, 'subject_id' => 4, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Siti (user_id=3) teaches Bahasa Indonesia and Bahasa Inggris
            ['teacher_id' => 3, 'subject_id' => 2, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 3, 'subject_id' => 2, 'class_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 3, 'subject_id' => 3, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 3, 'subject_id' => 3, 'class_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Rudi (user_id=4) teaches IPS and PKn
            ['teacher_id' => 4, 'subject_id' => 5, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 4, 'subject_id' => 5, 'class_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 4, 'subject_id' => 7, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 4, 'subject_id' => 7, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Dewi (user_id=5) teaches Seni Budaya and Penjaskes
            ['teacher_id' => 5, 'subject_id' => 8, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 5, 'subject_id' => 8, 'class_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 5, 'subject_id' => 9, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 5, 'subject_id' => 9, 'class_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Additional assignments for other classes
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 3, 'subject_id' => 2, 'class_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 4, 'subject_id' => 5, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => 5, 'subject_id' => 8, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('teacher_subjects')->insert($teacherSubjects);
    }
}

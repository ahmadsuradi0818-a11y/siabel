<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamClassSeeder extends Seeder
{
    public function run(): void
    {
        $examClasses = [
            // UTS Algoritma for class 1
            ['exam_id' => 1, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // UAS Algoritma for class 1
            ['exam_id' => 2, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // UTS Bahasa Indonesia for class 1
            ['exam_id' => 3, 'class_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // UH Matematika for class 3
            ['exam_id' => 4, 'class_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // PAT for class 5
            ['exam_id' => 5, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Tryout for class 5
            ['exam_id' => 6, 'class_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('exam_class')->insert($examClasses);
    }
}

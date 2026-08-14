<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    public function run(): void
    {
        AcademicYear::create([
            'year' => '2024/2025',
            'semester' => '1',
            'is_active' => true,
            'start_date' => '2024-07-15',
            'end_date' => '2024-12-20',
        ]);

        AcademicYear::create([
            'year' => '2024/2025',
            'semester' => '2',
            'is_active' => false,
            'start_date' => '2025-01-06',
            'end_date' => '2025-06-20',
        ]);

        AcademicYear::create([
            'year' => '2025/2026',
            'semester' => '1',
            'is_active' => false,
            'start_date' => '2025-07-14',
            'end_date' => '2025-12-19',
        ]);

        AcademicYear::create([
            'year' => '2025/2026',
            'semester' => '2',
            'is_active' => true,
            'start_date' => '2026-01-05',
            'end_date' => '2026-06-20',
        ]);
    }
}

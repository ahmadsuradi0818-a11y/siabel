<?php

namespace Database\Seeders;

use App\Models\TeacherPresence;
use Illuminate\Database\Seeder;

class TeacherPresenceSeeder extends Seeder
{
    public function run(): void
    {
        $presences = [
            ['teacher_id' => 2, 'date' => '2026-01-20', 'status' => 'hadir', 'presence_at' => '2026-01-20 06:55:00'],
            ['teacher_id' => 3, 'date' => '2026-01-20', 'status' => 'hadir', 'presence_at' => '2026-01-20 06:58:00'],
            ['teacher_id' => 4, 'date' => '2026-01-21', 'status' => 'hadir', 'presence_at' => '2026-01-21 06:50:00'],
            ['teacher_id' => 5, 'date' => '2026-01-21', 'status' => 'hadir', 'presence_at' => '2026-01-21 07:00:00'],
            ['teacher_id' => 2, 'date' => '2026-01-22', 'status' => 'izin', 'presence_at' => null],
            ['teacher_id' => 3, 'date' => '2026-01-22', 'status' => 'hadir', 'presence_at' => '2026-01-22 06:55:00'],
            ['teacher_id' => 4, 'date' => '2026-01-23', 'status' => 'hadir', 'presence_at' => '2026-01-23 06:52:00'],
            ['teacher_id' => 5, 'date' => '2026-01-23', 'status' => 'sakit', 'presence_at' => null],
            ['teacher_id' => 2, 'date' => '2026-01-24', 'status' => 'hadir', 'presence_at' => '2026-01-24 06:58:00'],
            ['teacher_id' => 3, 'date' => '2026-01-24', 'status' => 'hadir', 'presence_at' => '2026-01-24 07:00:00'],
        ];

        foreach ($presences as $presence) {
            TeacherPresence::create($presence);
        }
    }
}

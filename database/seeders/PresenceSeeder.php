<?php

namespace Database\Seeders;

use App\Models\Presence;
use Illuminate\Database\Seeder;

class PresenceSeeder extends Seeder
{
    public function run(): void
    {
        $presences = [
            // Week 1 - Jan 20, 2026 (Senin) - Matematika
            ['student_id' => 1, 'subject_id' => 1, 'date' => '2026-01-20', 'status' => 'hadir', 'presence_at' => '2026-01-20 07:02:00'],
            ['student_id' => 2, 'subject_id' => 1, 'date' => '2026-01-20', 'status' => 'hadir', 'presence_at' => '2026-01-20 07:05:00'],
            ['student_id' => 3, 'subject_id' => 2, 'date' => '2026-01-20', 'status' => 'hadir', 'presence_at' => '2026-01-20 07:01:00'],
            ['student_id' => 4, 'subject_id' => 2, 'date' => '2026-01-20', 'status' => 'izin', 'presence_at' => null],

            // Week 2 - Jan 27, 2026 (Senin) - Matematika
            ['student_id' => 1, 'subject_id' => 1, 'date' => '2026-01-27', 'status' => 'hadir', 'presence_at' => '2026-01-27 07:00:00'],
            ['student_id' => 2, 'subject_id' => 1, 'date' => '2026-01-27', 'status' => 'sakit', 'presence_at' => null],
            ['student_id' => 3, 'subject_id' => 2, 'date' => '2026-01-27', 'status' => 'hadir', 'presence_at' => '2026-01-27 07:03:00'],
            ['student_id' => 4, 'subject_id' => 2, 'date' => '2026-01-27', 'status' => 'hadir', 'presence_at' => '2026-01-27 06:58:00'],

            // Week 3 - Feb 3, 2026 (Senin) - Matematika
            ['student_id' => 1, 'subject_id' => 1, 'date' => '2026-02-03', 'status' => 'hadir', 'presence_at' => '2026-02-03 07:04:00'],
            ['student_id' => 2, 'subject_id' => 1, 'date' => '2026-02-03', 'status' => 'hadir', 'presence_at' => '2026-02-03 07:02:00'],
            ['student_id' => 3, 'subject_id' => 2, 'date' => '2026-02-03', 'status' => 'alpha', 'presence_at' => null],
            ['student_id' => 4, 'subject_id' => 2, 'date' => '2026-02-03', 'status' => 'hadir', 'presence_at' => '2026-02-03 07:10:00'],

            // Week 4 - Feb 10, 2026 (Senin) - Matematika
            ['student_id' => 1, 'subject_id' => 1, 'date' => '2026-02-10', 'status' => 'hadir', 'presence_at' => '2026-02-10 07:01:00'],
            ['student_id' => 2, 'subject_id' => 1, 'date' => '2026-02-10', 'status' => 'hadir', 'presence_at' => '2026-02-10 07:03:00'],
            ['student_id' => 3, 'subject_id' => 2, 'date' => '2026-02-10', 'status' => 'hadir', 'presence_at' => '2026-02-10 07:02:00'],
            ['student_id' => 4, 'subject_id' => 2, 'date' => '2026-02-10', 'status' => 'hadir', 'presence_at' => '2026-02-10 06:59:00'],

            // IPA presences for class 1
            ['student_id' => 1, 'subject_id' => 4, 'date' => '2026-01-21', 'status' => 'hadir', 'presence_at' => '2026-01-21 07:01:00'],
            ['student_id' => 2, 'subject_id' => 4, 'date' => '2026-01-21', 'status' => 'hadir', 'presence_at' => '2026-01-21 07:05:00'],

            // Class 3 (XI RPL 1) presences - Matematika
            ['student_id' => 5, 'subject_id' => 1, 'date' => '2026-01-22', 'status' => 'hadir', 'presence_at' => '2026-01-22 07:02:00'],
            ['student_id' => 6, 'subject_id' => 1, 'date' => '2026-01-22', 'status' => 'hadir', 'presence_at' => '2026-01-22 07:04:00'],
            ['student_id' => 5, 'subject_id' => 1, 'date' => '2026-01-29', 'status' => 'sakit', 'presence_at' => null],
            ['student_id' => 6, 'subject_id' => 1, 'date' => '2026-01-29', 'status' => 'hadir', 'presence_at' => '2026-01-29 07:01:00'],
        ];

        foreach ($presences as $presence) {
            Presence::create($presence);
        }
    }
}

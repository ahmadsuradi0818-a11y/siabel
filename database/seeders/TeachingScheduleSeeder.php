<?php

namespace Database\Seeders;

use App\Models\TeachingSchedule;
use Illuminate\Database\Seeder;

class TeachingScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $schedules = [
            // Senin
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 1, 'day_of_week' => 'Senin', 'start_time' => '07:00', 'end_time' => '09:00', 'room' => 'RPL-1'],
            ['teacher_id' => 3, 'subject_id' => 2, 'class_id' => 1, 'day_of_week' => 'Senin', 'start_time' => '09:30', 'end_time' => '11:00', 'room' => 'RPL-1'],
            ['teacher_id' => 5, 'subject_id' => 8, 'class_id' => 1, 'day_of_week' => 'Senin', 'start_time' => '13:00', 'end_time' => '14:30', 'room' => 'RPL-1'],

            // Selasa
            ['teacher_id' => 2, 'subject_id' => 4, 'class_id' => 1, 'day_of_week' => 'Selasa', 'start_time' => '07:00', 'end_time' => '09:00', 'room' => 'Lab IPA'],
            ['teacher_id' => 4, 'subject_id' => 5, 'class_id' => 1, 'day_of_week' => 'Selasa', 'start_time' => '09:30', 'end_time' => '11:00', 'room' => 'RPL-1'],
            ['teacher_id' => 5, 'subject_id' => 9, 'class_id' => 1, 'day_of_week' => 'Selasa', 'start_time' => '13:00', 'end_time' => '14:30', 'room' => 'Lapangan'],

            // Rabu
            ['teacher_id' => 3, 'subject_id' => 3, 'class_id' => 1, 'day_of_week' => 'Rabu', 'start_time' => '07:00', 'end_time' => '08:30', 'room' => 'RPL-1'],
            ['teacher_id' => 4, 'subject_id' => 7, 'class_id' => 1, 'day_of_week' => 'Rabu', 'start_time' => '09:00', 'end_time' => '10:30', 'room' => 'RPL-1'],
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 3, 'day_of_week' => 'Rabu', 'start_time' => '13:00', 'end_time' => '15:00', 'room' => 'RPL-3'],

            // Kamis
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 2, 'day_of_week' => 'Kamis', 'start_time' => '07:00', 'end_time' => '09:00', 'room' => 'RPL-2'],
            ['teacher_id' => 3, 'subject_id' => 2, 'class_id' => 2, 'day_of_week' => 'Kamis', 'start_time' => '09:30', 'end_time' => '11:00', 'room' => 'RPL-2'],
            ['teacher_id' => 5, 'subject_id' => 8, 'class_id' => 2, 'day_of_week' => 'Kamis', 'start_time' => '13:00', 'end_time' => '14:30', 'room' => 'RPL-2'],

            // Jumat
            ['teacher_id' => 4, 'subject_id' => 5, 'class_id' => 3, 'day_of_week' => 'Jumat', 'start_time' => '07:00', 'end_time' => '08:30', 'room' => 'RPL-3'],
            ['teacher_id' => 3, 'subject_id' => 3, 'class_id' => 3, 'day_of_week' => 'Jumat', 'start_time' => '09:00', 'end_time' => '10:30', 'room' => 'RPL-3'],
            ['teacher_id' => 4, 'subject_id' => 7, 'class_id' => 5, 'day_of_week' => 'Jumat', 'start_time' => '13:00', 'end_time' => '14:30', 'room' => 'RPL-5'],

            // Sabtu
            ['teacher_id' => 5, 'subject_id' => 9, 'class_id' => 2, 'day_of_week' => 'Sabtu', 'start_time' => '07:00', 'end_time' => '08:30', 'room' => 'Lapangan'],
            ['teacher_id' => 2, 'subject_id' => 1, 'class_id' => 5, 'day_of_week' => 'Sabtu', 'start_time' => '09:00', 'end_time' => '11:00', 'room' => 'RPL-5'],
        ];

        foreach ($schedules as $schedule) {
            TeachingSchedule::create($schedule);
        }
    }
}

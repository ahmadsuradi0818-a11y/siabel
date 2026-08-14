<?php

namespace Database\Seeders;

use App\Models\SchoolProfile;
use Illuminate\Database\Seeder;

class SchoolProfileSeeder extends Seeder
{
    public function run(): void
    {
        SchoolProfile::create([
            'school_name' => 'SMK Satya Nusantara',
            'npsn' => '20234567',
            'address' => 'Jl. Raya Utama No. 100, Jakarta Selatan',
            'phone' => '021-1234567',
            'email' => 'info@smksatya.sch.id',
            'website' => 'https://smksatya.sch.id',
            'headmaster' => 'Drs. H. Ahmad Fauzi, M.Pd',
            'nip_headmaster' => '196505151990011001',
            'vision' => 'Mewujudkan lulusan yang berkualitas, kompeten, dan berakhlak mulia di bidang Teknologi Informasi',
            'mission' => '1. Menyelenggarakan pendidikan berkualitas\n2. Mengembangkan potensi siswa\n3. Membentuk karakter yang berakhlak mulia\n4. Menjalin kerjasama dengan dunia industri',
            'presence_latitude' => -6.2297,
            'presence_longitude' => 106.8271,
            'presence_radius' => 100,
        ]);
    }
}

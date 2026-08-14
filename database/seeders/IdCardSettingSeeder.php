<?php

namespace Database\Seeders;

use App\Models\IdCardSetting;
use Illuminate\Database\Seeder;

class IdCardSettingSeeder extends Seeder
{
    public function run(): void
    {
        IdCardSetting::create([
            'header_bg_start' => '#1e3a5f',
            'header_bg_end' => '#2563eb',
            'card_bg_color' => '#ffffff',
            'header_text_color' => '#ffffff',
            'accent_color' => '#1e3a5f',
            'border_color' => '#e0e0e0',
            'font_family' => 'Segoe UI, Arial, sans-serif',
            'card_width' => 85.6,
            'card_height' => 54.0,
            'font_size_name' => 11,
            'font_size_detail' => 6,
            'show_logo' => true,
            'show_school_name' => true,
            'show_npsn' => true,
            'show_photo' => true,
            'show_nis' => true,
            'show_nisn' => true,
            'show_class' => true,
            'show_gender' => true,
            'show_birthplace' => true,
            'show_religion' => true,
            'show_address' => true,
            'show_headmaster' => true,
            'show_validity' => true,
            'custom_sidebar_text' => null,
            'custom_footer_text' => null,
            'background_template' => null,
            'layout_mode' => 'auto',
            'element_positions' => null,
        ]);
    }
}

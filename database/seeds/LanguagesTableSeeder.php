<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->delete();
        // Language::create(['title' => 'Türkçe', 'code' => 'tr', 'site_title' => 'Blog', 'site_description' => 'Muhteşem İnternet Sitem']);
        // 
        Language::create(['title' => 'PortuguÊs', 'code' => 'pt-BR', 'site_title' => 'Transparência Saúde', 'site_description' => 'SEMUS - Palmas']);
        Language::create(['title' => 'English', 'code' => 'en', 'site_title' => 'Blog', 'site_description' => 'My Awesome Blog']);
    }
}

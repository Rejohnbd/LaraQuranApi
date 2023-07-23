<?php

use App\ArabicFont;
use Illuminate\Database\Seeder;

class ArabicFontTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArabicFont::create([
            'name'  => 'KFGQPC Hafs'
        ]);

        ArabicFont::create([
            'name'  => 'KFGQPC Naskh'
        ]);

        ArabicFont::create([
            'name'  => 'Me-Quran'
        ]);

        ArabicFont::create([
            'name'  => 'PDMS Saleem'
        ]);

        ArabicFont::create([
            'name'  => 'Scheherazade'
        ]);
    }
}

<?php

use App\SuraInfo;
use Illuminate\Database\Seeder;

class SuraInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sura Fatiha
        SuraInfo::create([
            'arabic_text'   => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ ‎﴿١﴾‏ الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ ‎﴿٢﴾‏ الرَّحْمَٰنِ الرَّحِيمِ ‎﴿٣﴾‏ مَالِكِ يَوْمِ الدِّينِ ‎﴿٤﴾‏ إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ‎﴿٥﴾‏ اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ ‎﴿٦﴾‏ صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ ‎﴿٧﴾‏',
            'audio'         => 'surahs/al-afasi/001.mp3'
        ]);

        // Sura Bakara
        // SuraInfo::create([
        //     'arabic_text'   => ''
        //     'audio'         => 'surahs/al-afasi/002.mp3'
        // ]);
    }
}
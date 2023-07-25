<?php

use App\SuraAyahRecite;
use Illuminate\Database\Seeder;

class SuraAyahReciterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  1,
            'audio'         => '/surahs/al-afasy/001001.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  2,
            'audio'         => '/surahs/al-afasy/001002.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  3,
            'audio'         => '/surahs/al-afasy/001003.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  4,
            'audio'         => '/surahs/al-afasy/001004.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  5,
            'audio'         => '/surahs/al-afasy/001005.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  6,
            'audio'         => '/surahs/al-afasy/001006.mp3'
        ]);

        SuraAyahRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'ayah_id'       =>  7,
            'audio'         => '/surahs/al-afasy/001007.mp3'
        ]);
    }
}

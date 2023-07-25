<?php

use App\CompleteSuraRecite;
use Illuminate\Database\Seeder;

class CompleteSuraReciteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompleteSuraRecite::create([
            'sura_list_id'  =>  1,
            'reciter_id'    =>  3,
            'audio'         => '/surahs/al-afasy/001.mp3'
        ]);
    }
}

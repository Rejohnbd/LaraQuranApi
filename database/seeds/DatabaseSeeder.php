<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UserTableSeeder::class,
            ArabicFontTableSeeder::class,
            ReciterTableSeeder::class,
            SuraListTableSeeder::class,
            SuraInfoTableSeeder::class,
            CompleteSuraReciteTableSeeder::class,
            SuraAyahReciterTableSeeder::class
            // SuraInfoDetailsTableSeeder::class
            // TranslationTableSeeder::class,
        ]);
    }
}

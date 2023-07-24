<?php

use App\Reciter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReciterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reciter::create([
            'name_slug' => Str::slug('AbdulBasit'),
            'name'      => 'AbdulBasit'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('AbdulBasit (Mujawwad)'),
            'name'      => 'AbdulBasit (Mujawwad)'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Afasy'),
            'name'      => 'Al-Afasy'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Ajamy'),
            'name'      => 'Al-Ajamy'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Akhdar'),
            'name'      => 'Al-Akhdar'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Ghamadi'),
            'name'      => 'Al-Ghamadi'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Hudhaify'),
            'name'      => 'Al-Hudhaify'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Husary'),
            'name'      => 'Al-Husary'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Husary (Mujawwad)'),
            'name'      => 'Al-Husary (Mujawwad)'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Juhany'),
            'name'      => 'Al-Juhany'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Matrood'),
            'name'      => 'Al-Matrood'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Minshawi'),
            'name'      => 'Al-Minshawi'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Minshawi (Mujawwad)'),
            'name'      => 'Al-Minshawi (Mujawwad)'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Muaiqly'),
            'name'      => 'Al-Muaiqly'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Al-Qasim'),
            'name'      => 'Al-Qasim'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Ar-Rafai'),
            'name'      => 'Ar-Rafai'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('As-Sudais'),
            'name'      => 'As-Sudais'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Ash-Shateri'),
            'name'      => 'Ash-Shateri'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Ash-Shuraim'),
            'name'      => 'Ash-Shuraim'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('At-Tablawi'),
            'name'      => 'At-Tablawi'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Basfar'),
            'name'      => 'Basfar'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Basfar II'),
            'name'      => 'Basfar II'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Bukhatir'),
            'name'      => 'Bukhatir'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Muhammad Ayyub'),
            'name'      => 'Muhammad Ayyub'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Muhammad Jibreel'),
            'name'      => 'Muhammad Jibreel'
        ]);

        Reciter::create([
            'name_slug' => Str::slug('Parhizgar'),
            'name'      => 'Parhizgar'
        ]);
    }
}

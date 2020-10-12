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
        // $this->call(UserSeeder::class);
        $path = 'public/Seed/datosBD.sql';
        DB::unprepared(file_get_contents($path));
        $path = 'public/Seed/localidades.sql';
        DB::unprepared(file_get_contents($path));

    }
}

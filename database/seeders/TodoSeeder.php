<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'todos' )->insert([

            'todoname' => 'Laravel gyakorlás'
        ]);

        DB::table( 'todos' )->insert([

            'todoname' => 'Próbálgatás gyakorlás'
        ]);

        DB::table( 'todos' )->insert([

            'todoname' => 'Új dolgok gyakorlása'
        ]);

        DB::table( 'todos' )->insert([

            'todoname' => 'Öröm boldogság'
        ]);
    }
}

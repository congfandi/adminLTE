<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,100) as $todo){
            DB::table('todos')->insert([
                'title' => 'Coba Teks todo '.Str::random(7),
            ]);
        }
    }
}

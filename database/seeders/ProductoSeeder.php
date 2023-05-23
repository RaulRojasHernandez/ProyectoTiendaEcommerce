<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('productos')->insert([
        'producto' => 'Manzano',
        'precio' => '200',
        'cantidad' =>'1',
      ]);

      DB::table('productos')->insert([
        'producto' => 'lavanda',
        'precio' => '150',
        'cantidad' =>'1',
      ]);

    }
}

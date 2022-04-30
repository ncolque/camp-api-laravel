<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
            [
                'alumno_id' => '1',
                'precio_id' => '1',
            ],
            [
                'alumno_id' => '2',
                'precio_id' => '2',
            ],
            [
                'alumno_id' => '3',
                'precio_id' => '3',
            ],
        ]);
    }
}

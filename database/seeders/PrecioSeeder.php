<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precios')->insert([
            [
                'type' => 'Becado',
                'cost' => 0,
                'active' => true,
            ],
            [
                'type' => 'Pre venta',
                'cost' => 35.00,
                'active' => true,
            ],
            [
                'type' => 'Venta regular',
                'cost' => 50.00,
                'active' => true,
            ],
            [
                'type' => 'Post venta',
                'cost' => 100.00,
                'active' => true,
            ],
        ]);
    }
}

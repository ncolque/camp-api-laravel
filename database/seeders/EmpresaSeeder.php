<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            [
                'name' => 'Amazon',
                'description' => '...',
                'phone' => '1111111'
            ],
            [
                'name' => 'Google',
                'description' => '...',
                'phone' => '2222222'
            ],
            [
                'name' => 'Digital Ocean',
                'description' => '...',
                'phone' => '3333333'
            ],
        ]);
    }
}

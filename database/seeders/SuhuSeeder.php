<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuhuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(sensor_suhu)->insert([
            'id' => '001',
            'Data_Sensor' => '30 Derajat',
            'Status'=> 'Aman',
            'Tanggal'=> '30/03/2023',
            'Waktu'=>'12.00',
        ]);
    }
}

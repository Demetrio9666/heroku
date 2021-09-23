<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dewormer;
class DewormerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dewormer::create([
           
            'dewormer_d'=>'BENZIMIDAZOLES',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'DISPONIBLE',
        ]);
        Dewormer::create([
            'dewormer_d'=>'ECTOSIN',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'DISPONIBLE',
        ]);
        Dewormer::create([
            'dewormer_d'=>'MAGAP',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'DISPONIBLE',
        ]);
        Dewormer::create([
            'dewormer_d'=>'BENZIMI',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'DISPONIBLE',
        ]);
        Dewormer::create([
            'dewormer_d'=>'DAZOLES',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'INACTIVO',
        ]);
        Dewormer::create([
            'dewormer_d'=>'IMIDAZOLES',
            'date_e'=> '2021-07-01',
            'date_c'=> '2024-07-19',
            'supplier'=>'ANYKAS',
            'actual_state'=>'DISPONIBLE',
        ]);
    }
}

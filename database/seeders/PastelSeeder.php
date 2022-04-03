<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pastels')->insert([
            'tamaño' => 'Pequeño',
            'ingredientes' => 'Leche condensada, Mermelada, Fondant casero, Chocolate',
            'precio' => '100'
        ]);

        DB::table('pastels')->insert([
            'tamaño' => 'Grande',
            'ingredientes' => '1Barras de Mantequilla, 1 Lata de Leche Condensada, 3 Huevos, 1 1/2 Tazas de Harina de trigo, 1 Cucharadita de Polvo para hornear, 3 Barras de Chocolate semiamargo en trozos (150 g c/u)',
            'precio' => '200'
        ]);

        DB::table('pastels')->insert([
            'tamaño' => 'Mediano',
            'ingredientes' => '2 tazas de harina, 2 tazas de azúcar, 1/2 tazas de cocoa, 2 cucharaditas de polvo para hornear, 2 cucharaditas de bicarbonato, 1 tazas de leche',
            'precio' => '150'
        ]);

        DB::table('pastels')->insert([
            'tamaño' => 'Pequeño',
            'ingredientes' => '250 gramos de harina, 150 gramos de mantequilla, 150 gramos de azúcar, 5 huevos, 1 cucharada copeteada de polvo, 1 cucharada de vainilla',
            'precio' => '90'
        ]);

        DB::table('pastels')->insert([
            'tamaño' => 'Grande',
            'ingredientes' => 'Leche condensada, Mermelada, Fondant casero, Chocolate',
            'precio' => '250'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cupcake;

class CupcakeSeeder extends Seeder
{
    public function run()
    {
        $cupcakes = [
            [
                'name' => 'Cupcake de Chocolate',
                'description' => 'Massa de chocolate com cobertura cremosa.',
                'price' => 8.50,
                'image' => 'https://via.placeholder.com/250'
            ],
            [
                'name' => 'Cupcake de Baunilha',
                'description' => 'Sabor suave com glacê de baunilha.',
                'price' => 7.00,
                'image' => 'https://via.placeholder.com/250'
            ],
            [
                'name' => 'Cupcake Red Velvet',
                'description' => 'Clássico americano com cobertura de cream cheese.',
                'price' => 9.50,
                'image' => 'https://via.placeholder.com/250'
            ]
        ];

        foreach ($cupcakes as $data) {
            Cupcake::create($data);
        }
    }
}

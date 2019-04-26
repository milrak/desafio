<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $produtos = [
            [
                'nome'=> 'Bola de Futebol',
                'descricao'=> 'Bola para campo (Gramado)',
                'valorVenda'=>'5.45',
                'quantidade' => 10,
                'ativo'=> 'y',
                'categoriaProduto_id'=> 1
            ],
            [
                'nome'=> 'Cerveja Artesanal',
                'descricao'=> 'Feita com água de chuva',
                'valorVenda'=>'11.50',
                'quantidade' => 50,
                'ativo'=> 'y',
                'categoriaProduto_id'=> 3
            ],
            [
                'nome'=> 'Red Label 1L',
                'descricao'=> '12 anos',
                'valorVenda'=>'120',
                'quantidade' => 5,
                'ativo'=> 'y',
                'categoriaProduto_id'=> 3
            ]
        ];

        foreach ($produtos as $produto) {
            DB::table('produtos')->insert($produto);
            # code...
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriaProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_produtos')->insert([
            'nome'=> 'Bazar',
            'ativo'=> 'y'
        ],
        [
            'nome'=> 'Vestuário',
            'ativo'=> 'y'
        ],
        [
            'nome'=> 'Bebida',
            'ativo'=> 'y'
        ],
        [
            'nome'=> 'Exemplo desativado',
            'ativo'=> 'n'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([ 'categoria' => 'Alimentação']);
        DB::table('categorias')->insert([ 'categoria' => 'Saúde']);
        DB::table('categorias')->insert([ 'categoria' => 'Moradia']);
        DB::table('categorias')->insert([ 'categoria' => 'Transporte']);
        DB::table('categorias')->insert([ 'categoria' => 'Educação']);
        DB::table('categorias')->insert([ 'categoria' => 'Lazer']);
        DB::table('categorias')->insert([ 'categoria' => 'Imprevistos']);
        DB::table('categorias')->insert([ 'categoria' => 'Outras']);
    }
}

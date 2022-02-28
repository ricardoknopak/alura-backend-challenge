<?php

namespace App\Http\Controllers;

use App\Receitas;

class ReceitasController extends BaseController
{
    /**
     * Create a new controller instance of Receitas.
     *
     * @return void
     */
    public function __construct()
    {
        $this->classe = Receitas::class;
    }

    public function findByName($descricao) {
        $recurso = DB::table('receitas')
                ->where('descricao', 'like', '%' . $descricao . '%')
                ->get();
        return $recurso;
    }
}

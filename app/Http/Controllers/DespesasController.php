<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Despesas;

class DespesasController extends BaseController
{
    /**
     * Create a new controller instance of Despesas.
     *
     * @return void
     */
    public function __construct()
    {
        $this->classe = Despesas::class;
    }

    public function index() {
        $recurso = DB::table('despesas')
                // ->join('categorias', 'despesas.categoria', '=', 'categorias.id')
                ->get();
        return $recurso;
    }

    public function findByName($descricao) {
        $recurso = DB::table('despesas')
                ->where('descricao', 'like', '%' . $descricao . '%')
                ->get();
        return $recurso;
    }
}

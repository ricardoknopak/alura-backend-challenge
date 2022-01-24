<?php

namespace App\Http\Controllers;

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
}

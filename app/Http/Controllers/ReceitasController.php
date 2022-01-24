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
}

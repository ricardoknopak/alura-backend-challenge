<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

abstract class BaseController
{
    protected $classe;

    public function index()
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        if (is_null($request->descricao) || is_null($request->valor) || is_null($request->data)) {
            return response()->json(["error" => "As informações 'Descrição' e 'Valor' são obrigatórias"], 203);
        }
        if($this->classe::existsRecurso($request->valor, $request->descricao, $request->data)) {
            return response()->json(["error" => "Já existe um registro igual a este para o mês selecionado"], 203);
        }
        return response()->json(
            $this->classe::create($request->all()), 201
        );
    }

    public function show(int $id)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json('', 204);
        }

        return response()->json($recurso);
    }

    public function update(int $id, Request $request)
    {
        $recurso = $this->classe::find($id);
        if (is_null($recurso)) {
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = $this->classe::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        return response()->json('', 204);
    }

    public function findByName(String $descricao) {
        
        $recurso = DB::table('receitas')
                ->where('descricao', 'like', '%' . $descricao . '%')
                ->get();
        
        return $recurso;

    }
}

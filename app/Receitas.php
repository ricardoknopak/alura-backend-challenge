<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Receitas extends Model
{
    protected $fillable = [
        'descricao', 'valor', 'data'
    ];

    public static function existsRecurso(float $valor, String $descricao, String $data ) {
        $month = explode('-', $data)[1];
        $year = explode('-', $data)[0];

        $receitas = DB::table('receitas')
            ->where([
                ['descricao', '=', $descricao],
                ['valor', '=', $valor]
            ])
            ->whereMonth('data', '=', $month)
            ->whereYear('data', '=', $year)
            ->get();
        return count($receitas) > 0 ? true : false;
    }
}
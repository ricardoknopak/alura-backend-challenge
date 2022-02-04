<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Despesas extends Model
{
    protected $fillable = [
        'descricao', 'valor', 'data', 'categoria'
    ];

    public static function existsRecurso(float $valor, String $descricao, String $data ) {
        $month = explode('-', $data)[1];
        $year = explode('-', $data)[0];

        $despesas = DB::table('despesas')
            ->where([
                ['descricao', '=', $descricao],
                ['valor', '=', $valor]
            ])
            ->whereMonth('data', '=', $month)
            ->whereYear('data', '=', $year)
            ->get();
        return count($despesas) > 0 ? true : false;
    }
}

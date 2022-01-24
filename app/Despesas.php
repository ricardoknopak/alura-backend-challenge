<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'valor'
    ];
}

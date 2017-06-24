<?php

namespace Lojinha;

use Illuminate\Database\Eloquent\Model;

/**
 * Padrão de projeto ActiveRecord
 * padrão de acesso a dados no laravel)
*/

class Produto extends Model
{

    //configurando a tabela a ser usada pela classe
    protected $table = "produtos";

    //Configurando campos que podem ser salvos no create
    protected $fillable = ["id","nome","preco","descricao"];

    public $timestamps = false;

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['id','nome'];
    protected $table    = 'pessoas';


    public function buscaTelefone(){

        return $this->hasMany(Telefone::class , 'fk_id_pessoa');



    }

    public function buscaEndereco(){

        return $this->hasMany(Endereco::class,'fk_id_pessoa');

    }



}

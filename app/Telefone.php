<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['id', 'ddd', 'numero', 'fk_id_pessoa'];
    protected $table = 'telefones';

    public function pessoa()
    {

        return $this->belongsTo(Pessoa::class, 'id');

    }






}

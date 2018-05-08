<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['id','endereco','fk_id_pessoa'];
    protected $table    = 'enderecos';

    public function pessoa()
    {

        return $this->belongsTo(Pessoa::class, 'id');

    }

}

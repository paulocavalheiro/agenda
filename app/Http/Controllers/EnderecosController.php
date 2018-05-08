<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecosController extends Controller
{

    public function store ($endereco){



        try {
            $endereco->save();
        }catch (\Exception $erro){

            return "Erro: ". $erro->getMessage();
        }




    }


}

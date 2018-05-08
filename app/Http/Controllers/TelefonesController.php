<?php

namespace App\Http\Controllers;

use App\Telefone;
use Illuminate\Http\Request;

class TelefonesController extends Controller
{

    private $telefone;

    public function __construct()
    {

        $this->telefone = new Telefone();

    }



    public function store ($telefone){


        try {
            $telefone->save();
        }catch (\Exception $erro){

                return "Erro: ". $erro->getMessage();
        }



        //var_dump($telefone->ddd,$telefone->numero,$telefone->fk_id_pessoa);

    }

    public function getTelefone($id){


       $user = $this->telefone->find($id);
       var_dump($user); exit();

        //$user = User::find(212)->profile->telephone;
        //return $this->telefone->find($id);

    }


}

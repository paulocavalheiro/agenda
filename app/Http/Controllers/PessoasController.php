<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Pessoa;
use App\Telefone;
use Illuminate\Http\Request;

class PessoasController extends Controller
{

    private $telefones;
    private $pessoa;
    private $endereco;


    public function __construct(TelefonesController $telefonesController, EnderecosController $enderecosController)
    {

        $this->telefones = $telefonesController;
        $this->endereco  = $enderecosController;
        $this->pessoa = new Pessoa();



    }

    public function index(){

        $list_pessoas = Pessoa::all();
        return view('pessoas.index',['pessoas'=>$list_pessoas]);


    }

    public function novaPessoa(){

        return view('pessoas.create');


    }

    public function cadPessoas(Request $request){

        //var_dump($request->all());
        $id_pessoa = Pessoa::create($request->all());

        if($request->ddd && $request->telefone){

            $telefone = new Telefone();
            $telefone->ddd          = $request->ddd;
            $telefone->numero       = $request->telefone;
            $telefone->fk_id_pessoa = $id_pessoa->id;

            $this->telefones->store($telefone);

        }
        if($request->endereco){

            $endereco = new Endereco();
            $endereco->enderecos = $request->endereco;
            $endereco->fk_id_pessoa = $id_pessoa->id;

            $this->endereco->store($endereco);

        }

        return redirect('/pessoas')->with('message','Pessoa cadastrada') ;
    }


    public function editarPessoa ($id){

        $this->telefones->getTelefone($id);
        return view('pessoas.edit' , ['pessoa'=>$this->getPessoa($id)]);


    }

    protected function getPessoa($id){

       return $this->pessoa->find($id);

    }


    public function update(Request $request){


        $pessoa = $this->getPessoa($request->id);
        $pessoa->update($request->all());
        return redirect('/pessoas');


    }



}

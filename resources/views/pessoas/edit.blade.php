<!--
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 21/09/2017
 * Time: 15:25
 */
-->
@extends('template.app')

@section('content')

    <div class="col-md-6 well">
        <h3>Editar contato</h3>
        <form class="content" action="{{url('/pessoas/update')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="" value="{{ $pessoa->nome}}">
                <small class="form-text text-muted">Nome do contato.</small>
            </div>
            <input type="hidden" name="id" value="{{$pessoa->id}}">
            <button type="submit" class="btn btn-primary">Enviar</button>
         </form>
    </div>
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">{{$pessoa->nome}}</div>
            @foreach($pessoa->buscaTelefone as $telefone)
                <div class="panel-body"><strong>Telefone</strong> {{$telefone->ddd}} - {{$telefone->numero}}</div>
            @endforeach
            @foreach($pessoa->buscaEndereco as $endereco)
                <div class="panel-body"><strong>Endereço</strong> {{$endereco->enderecos}} </div>
            @endforeach

        </div>
    </div>


@endsection
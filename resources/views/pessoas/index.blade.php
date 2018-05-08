<!--
 * Created by PhpStorm.
 * User: Paulo
 * Date: 05/09/2017
 * Time: 16:19
 *-->
@extends('template.app')
@section('content')
    <div class="col-md-12">
        @foreach($pessoas as $pessoa )
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">{{$pessoa->nome}}<a href="{{url("/pessoas/$pessoa->id/editar") }}" style="float: right;color: yellow" >Editar</a></div>
                    @foreach($pessoa->buscaTelefone as $telefone)
                        <div class="panel-body"><strong>Telefone</strong> {{$telefone->ddd}} - {{$telefone->numero}}</div>
                    @endforeach
                    @foreach($pessoa->buscaEndereco as $endereco)
                        <div class="panel-body">{{$endereco->enderecos}}</div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
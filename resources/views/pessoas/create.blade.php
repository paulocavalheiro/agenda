<!--
/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 06/09/2017
 * Time: 15:59
 *
 -->
@extends('template.app')
@section('content')
    <div class="col-md-12">
    <h3>Novo contato</h3>
        <form class="content" action="{{url('/pessoas/store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="">
                <small id="emailHelp" class="form-text text-muted">Nome do contato.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">DDD</label>
                <input type="text" class="form-control" name="ddd" placeholder="(00)">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="3333-3333">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection




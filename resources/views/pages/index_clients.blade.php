@extends('layouts.app', ["paginaCorrente" => "clientes"])

@section('titulo','Cadastro - Pesquisar Clientes')

@section('body')

    <div class="card-header">
        <div class="card-title">
            <h5>Cadastro de clientes</h5>
        </div>
    </div> 
    <div class="card border">
        <div class="card-body">
            @if(count($clientes) >0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->name }}</td>
                            <td>{{ $cliente->birthdate }}</td>
                            <td>{{ $cliente->address }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td><a href="/clientes/editar/{{$cliente->id}}" class="btn btn-sm btn-primary">Editar</a></td>
                            <td><a href="/clientes/apagar/{{$cliente->id}}" class="btn btn-sm btn-danger">Excluir</a></td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <h5 class="card-text">Não há clientes cadastrados no sistema.</h5>
            @endif
        </div>
        <div class="card-footer">
            <a href="/clientes/create" class="btn btn-primary">Cadastrar novo cliente</a>
        </div>
    </div>  
@endsection
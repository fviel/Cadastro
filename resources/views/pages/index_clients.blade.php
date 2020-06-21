@extends('layouts.app', ["paginaCorrente" => "clientes"])

@section('titulo','Cadastro - Pesquisar Clientes')

@section('body')

    <h1>Clientes</h1>

    <a href="/clientes/create" class="btn btn-outline-success btn-sm" >Cadastro de Novo Cliente</a>

    <table class="table table-bordered table-hover" id="tabelaClientes">
        <thead>
            <th>Id</th>
            <th>Nome completo</th>
            <th>Data de nascimento</th>
            <th>Endereço</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente )
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->name }}</td>
                <td>{{ $cliente->birthdate }}</td>
                <td>{{ $cliente->address }}</td>
                <td>{{ $cliente->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
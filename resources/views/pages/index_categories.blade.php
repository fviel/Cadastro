@extends('layouts.app', ["paginaCorrente" => "categorias"])

@section('titulo','Cadastro - Pesquisar Categorias')

@section('body')    

    <div class="card text-dark bg-white mb-3">                    
        <div class="card-body">
            <h5 class="card-title">Categorias cadastradas</h5>
            @if(count($allCategories) > 0)
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        @foreach ( $allCategories as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->description}}</td>
                            <td>
                                <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>                        
                                <a href="/categorias/excluir/{{$cat->id}}" class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5 class="card-text">Não há categorias cadastradas no sistema.</h5>
            @endif            
            </div>
        <div class="card-footer">
            <a href="/categorias/create" class="btn btn-outline-success btn-sm">Adicionar Categoria</a>
        </div>
    </div>    
@endsection
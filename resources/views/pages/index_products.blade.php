@extends('layouts.app', ["paginaCorrente" => "produtos"])

@section('titulo','Cadastro - Pesquisar Produtos')

@section('body')

<div class="card text-dark bg-white mb-3">                    
    <div class="card-body">
        <h5 class="card-title">Produtos cadastrados</h5>
        @if(count($allProducts) > 0)
            <table class="table ">
                <thead>
                    <tr>   
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Estrelas</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>                        
                    @foreach ( $allProducts as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->name}}</td>
                        <td>{{$prod->description}}</td>
                        <td>{{$prod->stars}}</td>
                        <td>{{$prod->price}}</td>
                        <td>{{$prod->quantity}}</td>
                        <td>{{$prod->category_id}}</td>
                        <td>
                            <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>                        
                            <a href="/produtos/excluir/{{$prod->id}}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        @else
            <h5 class="card-text">Não há produtos cadastrados no sistema.</h5>
        @endif            
        </div>
        <div class="card-footer">
            <a href="/produtos/create" class="btn btn-outline-success btn-sm">Adicionar Produto</a>
        </div>
    </div> 
    
@endsection
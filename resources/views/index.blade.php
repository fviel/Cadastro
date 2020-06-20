@extends('layouts.app', ["paginaCorrente" => "home"])

@section('titulo','Cadastro index')

@section('body')

    <div class="jumbotron bg-light ">
        <div class="row">
            <div class="card-deck">
                <div class="card text-white bg-dark mb-3">                    
                    <div class="card-body">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Tesiuhnvionfvoie eroifjmd oçfer oijfreoifjaeirj refioj soifjasd joidj</p>
                        <a href="/produtos" class="btn btn-outline-primary btn-sm btn-block">Cadastre seus Produtos</a>
                        
                    </div>
                </div>

                <div class="card text-white bg-dark mb-3">                    
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Tesiuhnvionfvoie eroifjmd oçfer oijfreoifjaeirj refioj soifjasd joidj</p>
                        <a href="/categorias" class="btn btn-outline-secondary btn-sm btn-block">Cadastre suas Categorias de Produtos</a>
                        
                    </div>
                </div>

                <div class="card text-white bg-dark mb-3" >                    
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">Cadastro dinâmico de clientes</p>
                        <a href="/clientes" class="btn btn-outline-success btn-sm btn-block" >Cadastro de Clientes</a>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection
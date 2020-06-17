@extends('layouts.app', ["paginaCorrente" => "categorias"])

@section('titulo','Cadastro - Nova Categoria')

@section('body')
    
            <div class="card text-dark bg-light mb-3">                    
                <div class="card-body">
                    <h5 class="card-title">Adicionar Categoria</h5>
                    <form action="/categorias" method="POST">
                        @csrf
                        <div class="form-group">                        
                            <label for="nomeCategoria">Nome</label>
                            <input name="nomeCategoria" type="text" maxlength="128" class="form-control">                        

                            <label for="descCategoria">Descrição</label>
                            <input name="descCategoria" type="text" maxlength="512" class="form-control">   
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-secondary btn-sm">Cancelar</button> 
                    </form>
                </div>
            </div>
    
@endsection
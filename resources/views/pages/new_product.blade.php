@extends('layouts.app', ["paginaCorrente" => "produtos"])

@section('titulo','Cadastro - Novo Produtos')

@section('body')

    <div class="card text-dark bg-light mb-3">                    
        <div class="card-body">
            <h5 class="card-title">Adicionar Produtos</h5>
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">                        
                    <label for="nomeProduto">Nome</label>
                    <input name="nomeProduto" type="text" maxlength="128" class="form-control" required>                        

                    <label for="descProduto">Descrição</label>
                    <input name="descProduto" type="text" maxlength="512" class="form-control">   

                    <label for="estrelas">Estrelas</label>                    
                    <input type="number" name="estrelas" id="estrelas" placeholder="Estrelas" class="form-control" min="1" max="5">                        

                    <label for="preco">Preço (R$)</label>
                    <input type="number" name="preco" id="preco" placeholder="preço do produto" class="form-control" placeholder="00,00" min="0" max="999,99">  

                    <label for="quantidade">Quantidade em estoque</label>                    
                    <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade em estoque" class="form-control" min="0," max="99999">

                    <div class="form-group">
                        <label for="categorias">Categoria</label>
                        <select class="form-control" name="selCategoria" id="selCategoria">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach                    
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-secondary btn-sm">Cancelar</button> 
            </form>
        </div>
    </div>
       
@endsection
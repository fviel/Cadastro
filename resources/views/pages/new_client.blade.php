@extends('layouts.app', ["paginaCorrente" => "clientes"])

@section('titulo','Cadastro - Novo Cliente')

@section('body')

    
    <main role="main">
        <div class="row">
            <div class="container col-sm-10 offset-md-1">
                <h1>Novo Cliente</h1>
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>                    
                    <div class="card-body">
                        <form action="/clientes" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome completo do cliente" required="true" maxlength="512">
                            </div>
                            <div class="form-group">
                                <label for="nome">Idade</label>
                                <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do cliente" required="true" min="0" max="100">
                            </div>
                            <div class="form-group">
                                <label for="nome">Endereço</label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço completo do cliente" required="true" >
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="mail" id="email" class="form-control" name="email" placeholder="E-mail do cliente" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
@endsection
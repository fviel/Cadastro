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
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Nome completo do cliente" required="true" maxlength="512">
                            </div>
                            <div class="form-group">
                                <label for="nome">Data de nascimento</label>
                                <input type="date" id="birthdate" class="form-control" name="birthdate" placeholder="Idade do cliente" required="true" min="0" max="100">
                            </div>
                            <div class="form-group">
                                <label for="nome">Endereço</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="Endereço completo do cliente" required="true" >
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
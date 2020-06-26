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
                                <label for="nome">Nome Completo</label>
                                <input type="text" name="name" id="nameid" placeholder="Nome completo do cliente" class="form-control {{ $errors->has('name')?'is-invalid':'is-valid'}}" maxlength="512">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="nome">Data de nascimento</label>
                                <input type="date" id="birthdateid" class="form-control {{ $errors->has('birthdate')?'is-invalid':'is-valid'}}" name="birthdate" placeholder="Idade do cliente" >
                                @if($errors->has('birthdate'))
                                <div class="invalid-feedback">
                                    {{$errors->first('birthdate')}}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="nome">Endereço</label>
                                <input type="text" id="addressid" class="form-control  {{$errors->has('address')?'is-invalid':'is-valid'}}" name="address" placeholder="Endereço completo do cliente"  maxlength="1024">
                                @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address')}}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="mail" id="emailid" class="form-control {{$errors->has('email')?'is-invalid':'is-valid'}}" name="email" placeholder="E-mail do cliente"  maxlength="512">
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- @if(isset($errors))
    <div class="card-footer">
        @foreach ( $errors->all as $error )
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach   
    </div>
        {{ var_dump($errors) }}
    @endif
-->
    
@endsection
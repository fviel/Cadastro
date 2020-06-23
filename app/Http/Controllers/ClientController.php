<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtem o array de todos os clientes do BD
        $clientes = Client::all();
        return view('pages.index_clients', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.new_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         //forma correta de validar
        $regras = [
            'name' => 'required|min:3|max:60|unique:clients',
            'bithdate' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ];

        //especificando mensagens genéricas
        $mensagens = [
            'required' => 'O atributo :attribute deve ser informado.',
            'unique' => 'O atributo :attribute deve ser único no sistema.',
            'email' => 'O campo :attribute não apresenta um endereço de email válido.'
        ];
        $request->validate($regras, $mensagens);

        //especificando campo por campo...
        /*$mensagens = [
            'nome.required' => 'O nome do cliente é um campo obrigatório',
            'nome,unique' => 'O nome do cliente deve ser único no sistema'
        ];*/  

        $cliente = new Client;
        $cliente->name = $request->input('name');
        $cliente->birthdate = $request->input('birthdate');
        $cliente->address = $request->input('address');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect('/clientes');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

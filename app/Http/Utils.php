<?php

namespace App\Http;

class Utils
{
    public static function getMensagensValidacaoTraduzidas()
    { 
        //especificando mensagens genéricas
        $mensagens = [
            'required' => 'O atributo :attribute deve ser informado.',
            'unique' => 'O atributo :attribute deve ser único no sistema.',
            'email' => 'O campo :attribute não apresenta um endereço de email válido.'
        ];
      return $mensagens;
    }
}
<?php

function kvfj($json, $key){
    if($json == null){
        return null;
    } else {
        $json = $json;
        $json = json_decode($json, true);
        if(array_key_exists($key, $json)){
            return $json[$key];
        } else {
            return null;
        }
    }
}

function charges(){
    $c = [ 
        'charges' => [
            'title' => 'Cargos',
            'keys' => [
                'Gerente',
                'Administrador',
                'Comerciales',
                'Digitador',
                'Mercadeo',
                'Tesorero',
                'Asesores',
                'Ventas',
            ]
        ]
    ];

    return $c;
}

?>
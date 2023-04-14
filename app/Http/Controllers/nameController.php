<?php

namespace App\Http\Controllers;

class nameController extends Controller
{
    public function name (string $name = null){
        echo '<h1>Olá, '.$name .'bem vindo(a) ao meu site!</h1>';
    }
}

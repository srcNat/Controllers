<?php

namespace App\Http\Controllers;

class contasController extends Controller
{
    public function operation ( int $numero1, int $numero2, string $operacao = 'todas'){
        switch ($operacao){
            case $operacao == 'todas';
                echo 'Soma ='. $numero1 + $numero2.    'Subtração ='. $numero1 - $numero2. 
                'Multiplicação ='. $numero1 * $numero2.    'Divisão ='. $numero1 / $numero2;
                break;
            case $operacao == 'subtracao';
                echo 'Subtração = '. $numero1 - $numero2;
                break;
            case $operacao == 'soma';
                echo 'Soma ='. $numero1 + $numero2;
                break;
            case $operacao == 'divisao';
                echo 'Divisão = '. $numero1 / $numero2;
                break;
            case $operacao == 'multiplicacao';
                echo 'Multiplicação = '. $numero1 * $numero2;
                break;
            default:
                echo 'Esta operação não pode ser realizada.';
        }
    }
}
<?php

namespace App\Http\Controllers;

class idadeController extends Controller
{
    public function age (int $year, int $month = null, int $day = null){
        if ($month == null && $day == null){
            if ($year > 2023){
                echo '<b>Data incorreta, confira por favor.</b>';
            } else {
                echo 'Você tem/terá' . 2023 - $year . 'anos.';
            }
        } elseif ($day == null){
            if ($year > 2023 || $month > 12){
                echo '<b>Data incorreta, confira por favor.</b>';
            } elseif ($month < 4){
                echo 'Você tem' . 2023 - $year. 'anos e' . 4 - $month . 'meses!';
            } else {
                echo 'Você tem' . 2022 - $year. 'anos.';
            }
        } else {
            if ($year > 2023 || $month > 12 || $day > 31){
                echo '<b>Data incorreta, confira por favor.</b>';
            } elseif ($month > 3 && $day > 6){
                echo 'Você tem' . 2022 - $year. 'anos.';
            } elseif ($month == 4 && $day < 6){
                echo 'Você tem' . 2023 - $year. 'anos e' . 6 - $day . 'dias';

            } elseif ($month < 4){
                echo 'Você tem' . 2023 - $year. 'anos,'. 6 - $day . 'meses e' . 30 - $day . 'dias.';
            }
        }
    }
}
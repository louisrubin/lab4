<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensajeController extends Controller
{
    //
    public function showView() {
        return view('Calculadora.calculadora');
    }

    public function calcular(Request $request) {

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operac = $request->input('opciones');
        $resultado = 0;

        switch ($operac) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case 'x':
                $resultado = $num1 * $num2;
                break;
            case '/':
                $resultado = $num1 / $num2;
                break;
            
            default:
                # nada
                break;
        }
        //                                      name a retornar - variable
        return view('Calculadora.calculadora', ['resultado' => $resultado]);
    }

}

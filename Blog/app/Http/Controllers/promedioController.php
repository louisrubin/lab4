<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class promedioController extends Controller
{
    public function showView() {
        return view('PromedioNotas.promedio');
    }

    public function enviarCantMaterias(Request $request){
        $cantMaterias = $request->input('cantMateriasInput');
        return view('PromedioNotas.promedio', ['cantMaterias' => $cantMaterias]);
    }

    public function calcularPromedio(Request $request){
        // metodo calcular promedio en ruta: /promedio/calcular
        
        $cantMaterias = $request->input('cantMaterias');
        $sumador = 0;

        for ($i=0; $i < $cantMaterias; $i++) { 
            $nota = $request->input('nota'. ($i +1)); // 'nota1', 'nota2', etc.
            $sumador += $nota;
        }

        if ($cantMaterias > 0) {
            $promedio = $sumador / $cantMaterias;   // number
        } else {
            $promedio = "No hay materias para calcular el promedio.";   // text
        }
        return view('PromedioNotas.promedio', ['cantMaterias' => $cantMaterias, 'promedio' => $promedio]); // , 'promediado' => true
    }
}

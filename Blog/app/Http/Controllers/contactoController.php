<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function showView(){
        return view('Contacto.contacto');
    }

    public function enviarInfoContacto(Request $paquete){
        $nombre = $paquete->input('name');
        $telefono = $paquete->input('telefono');
        $address = $paquete->input('address');

        return view('Contacto.contacto', compact('nombre', 'telefono', 'address') );
        // método compact, que convierte las variables en un array asociativo automáticamente
    }
}

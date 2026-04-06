<?php

namespace App\Http\Controllers;

use App\Mail\NuevoContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email',
            'mensaje' => 'required|string|min:10',
        ]);

        Mail::to('bautistasantiago1902@gmail.com')->send(new NuevoContacto($data));

        return response()->json(['message' => '¡Mensaje enviado con éxito!'], 200);
    }
}

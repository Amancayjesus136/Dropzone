<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivo;

class UploadController extends Controller
{
    public function index()
    {
        return view('dropzone.file');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre.*' => 'required|file|max:10240', 
        ]);

        foreach ($request->file('nombre') as $archivo) {
            $nombreArchivo = $archivo->getClientOriginalName();

            Archivo::create([
                'nombre' => $nombreArchivo,
            ]);
        }

        return response()->json(['message' => 'Archivos subidos exitosamente'], 200);
    }
}

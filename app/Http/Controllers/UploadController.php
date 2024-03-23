<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('dropzone.file');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title.*' => 'required|string|max:20',
            'nombre.*' => 'required|file|max:10240',
        ]);

        foreach ($request->file('nombre') as $index => $archivo) {
            $nombreArchivo = $archivo->getClientOriginalName();
            $tituloArchivo = $request->input('title');

            Archivo::create([
                'title' => $tituloArchivo[$index], 
                'nombre' => $nombreArchivo,
            ]);
        }

        return response()->json(['message' => 'Archivos subidos exitosamente'], 200);
    }

    public function deleteFile(Request $request)
    {
        $nombreArchivo = $request->input('nombreArchivo');
        $archivo = Archivo::where('nombre', $nombreArchivo)->first();

        if ($archivo) {
            $archivo->delete();

            return response()->json(['message' => 'Archivo eliminado correctamente'], 200);
        } else {
            return response()->json(['message' => 'Archivo no encontrado'], 404);
        }
    }
}

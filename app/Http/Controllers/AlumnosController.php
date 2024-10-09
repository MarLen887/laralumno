<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Carreras;

class AlumnosController extends Controller
{
    public function index()
    {
        $alumnos = Alumnos::select('alumnos.id', 'nombre', 'correo','id_carrera','carrera')
        ->join('carreras','carreras.id','=','alumnos.id_carrera')->get();
        $carreras = Carreras::all();
        return view('alumnos', compact('alumnos','carreras'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $alumno = new Alumnos($request->input());
        $alumno->save();
        return redirect('alumnos');
    }

    public function show(string $id)
    {
        $alumno = Alumnos::find($id);
        $carreras = Carreras::all();
        return view('editAlumno', compact('alumno','carreras'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $alumno = Alumnos::find($id);
        $alumno ->fill($request->input())->save();
        return redirect('alumnos');
    }

    public function destroy(string $id)
    {
        $alumno = Alumnos::find($id);
        $alumno -> delete();
        return redirect('alumnos');
    }
}

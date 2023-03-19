<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['materias']=Materias::paginate(5);
        return view('materia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosMateria = request()->except('_token');
        Materias::insert($datosMateria);
        return redirect('materia');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materia = Materias::findOrFail($id);
        return view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
        $datosMateria = request()->except(['_token', '_method']);
        
        Materias::where('id','=',$id)->update($datosMateria);

        $materia = Materias::findOrFail($id);
        return view('materia.edit', compact('materia'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materia = Materias::findOrFail($id);
        Materias::destroy($id);

        return redirect('materia');
    }
}

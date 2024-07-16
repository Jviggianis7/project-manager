<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Personas::all();
        return view('dash.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Personas();
        $persona->Nombre = $request->get('Nombre');
        $persona->Apellidos = $request->get('Apellidos');
        $persona->Direccion = $request->get('Direccion');
        $persona->Telefono = $request->get('Telefono');
        $persona->Sexo = $request->get('Sexo');
        $persona->FechaNacimiento = $request->get('FechaNacimiento');
        $persona->Profesion = $request->get('Profesion');

        $persona->save();
        return redirect('/dash');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $IdPersona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $iIdPersona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Personas::find($id);
        return view('dash.edit')->with('persona',$persona); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $IdPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Personas::find($id);

       
        $persona->Nombre = $request->get('Nombre');
        $persona->Apellidos = $request->get('Apellidos');
        $persona->Direccion = $request->get('Direccion');
        $persona->Telefono = $request->get('Telefono');
        $persona->Sexo = $request->get('Sexo');
        $persona->FechaNacimiento = $request->get('FechaNacimiento');
        $persona->Profesion = $request->get('Profesion');

        $persona->save();
        return redirect('/dash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $IdPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $persona = Personas::find($id);
        $persona->delete();

        return redirect('/dash');         
    }
}

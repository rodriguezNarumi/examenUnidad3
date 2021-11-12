<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['personas']=Personas::paginate(10);
        return view('personas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosPersona = request()->all();
       $datosPersona = request()->except('_token');
       Personas::insert($datosPersona);
       // return response()->json($datosPersona);
      return redirect('personas')->with('mensaje','Dato Nuevo Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personas=Personas::findOrFail($id);

        return view('personas.edit', compact('personas') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersona = request()->except(['_token','_method']);
        Personas::where('id','=',$id)->update($datosPersona);

        $personas=Personas::findOrFail($id);

        return view('personas.edit', compact('personas') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personas::destroy($id);
         return redirect('persona');
        // return redirect('personas')->with('mensaje','Dato Borrado con exito');
    }
}

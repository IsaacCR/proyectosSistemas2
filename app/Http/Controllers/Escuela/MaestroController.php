<?php

namespace RED\Http\Controllers\Escuela;

use Illuminate\Http\Request;
use RED\Escuela\Maestro;
use RED\Http\Requests;
use RED\Http\Controllers\Controller;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teacher = Maestro::All();
        return view('Escuela.maestro.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Escuela.maestro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Maestro::create([
            'nombre_maestro' => $request['nombre_maestro'],
            'apellido_maestro' => $request['apellido_maestro'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
            'direccion' => $request['direccion'],
            'correo' => $request['correo'],
            'genero_id' => $request['genero'],
        ]);

    return redirect('/maestros')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $maestro = Maestro::find($id);
        return view('Escuela.maestro.edit', ['maestro'=>$maestro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $maestro = Maestro::find($id);
        $maestro->fill($request->all());
        $maestro->save();

    return redirect('/maestros')->with('message','edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

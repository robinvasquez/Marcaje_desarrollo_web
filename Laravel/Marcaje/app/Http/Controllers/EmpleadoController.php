<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleado;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = empleado::all();
       return response()->json($empleado, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'rol_id' => 'required',
            'puesto' => 'required',
            'correo' => 'required',
            'clave' => 'required'
        ];
        $messages = [
            'required' => 'El campo :attribute es obligatorio.'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'message' => "Información incompleta o inválida -> ".$validator->messages()->first()
            ], 400);
        }
        $empleado = empleado::create($request->all());
        return response()->json([
            'message' => "empleado saved successfully!",
            'empleado' => $empleado
        ], 200);
        //empleado::create($request->all());
        //return ['created' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = empleado::find($id);
        return response()->json($empleado, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = empleado::find($id);
        $empleado->update($request->all());
        return response()->json([
            'message' => "empleado Actualizado!",
            'empleado' => $empleado
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado->delete();

        return response()->json([
            'message' => "empleado deleted successfully!",
        ], 200);
    }
}
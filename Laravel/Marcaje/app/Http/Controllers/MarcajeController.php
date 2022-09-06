<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\marcaje;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
class MarcajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcaje = marcaje::all();
       return response()->json($marcaje, 200);
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
            'empleado_id' => 'required',
            'tipo_id' => 'required'
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
        $marcaje = marcaje::create($request->all());
        return response()->json([
            'message' => "marcaje saved successfully!",
            'marcaje' => $marcaje
        ], 200);
        //marcaje::create($request->all());
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
        $marcaje = marcaje::find($id);
        return response()->json($marcaje, 200);
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
        $marcaje = marcaje::find($id);
        $marcaje->update($request->all());
        return response()->json([
            'message' => "marcaje Actualizado!",
            'marcaje' => $marcaje
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
        $marcaje->delete();

        return response()->json([
            'message' => "marcaje deleted successfully!",
        ], 200);
    }
}
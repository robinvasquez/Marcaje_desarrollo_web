<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
/**/
use App\tipo;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tipo = tipo::all();
       return response()->json($tipo, 200);
       // return tipo::all();
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
            'descripccion' => 'required'
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
        $tipo = tipo::create($request->all());
        return response()->json([
            'message' => "TIPO saved successfully!",
            'tipo' => $tipo
        ], 200);
        //tipo::create($request->all());
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
        $tipo = tipo::find($id);
        return response()->json($tipo, 200);
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
        $tipo = tipo::find($id);
        $tipo->update($request->all());
        return response()->json([
            'message' => "TIPO Actualizado!",
            'tipo' => $tipo
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
        $tipo->delete();

        return response()->json([
            'message' => "Tipo deleted successfully!",
        ], 200);
    }
}

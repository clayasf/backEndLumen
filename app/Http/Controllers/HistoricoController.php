<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Historico::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historico = new Historico;

        $historico->logradouro      = $request->logradouro;
        $historico->complemento     = $request->complemento;
        $historico->bairro          = $request->bairro;
        $historico->localidade      = $request->localidade;
        $historico->uf              = $request->uf;
        $historico->unidade         = $request->unidade;
        $historico->ibge            = $request->ibge;
        $historico->gia             = $request->gia;
        $historico->ddd             = $request->ddd;
        $historico->siafi           = $request->siafi;
        
        $historico->save();
        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        return response()->json('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

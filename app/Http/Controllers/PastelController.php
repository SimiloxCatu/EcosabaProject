<?php

namespace App\Http\Controllers;

use App\Models\Pastel;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastels = Pastel::all(['id','tamaño','ingredientes','precio']);
        return response()->json($pastels);
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
        $pastel = Pastel::create($request->post());
        return response()->json([           
            'pastel'=>$pastel
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pastel $pastel
     * @return \Illuminate\Http\Response
     */
    public function show(Pastel $pastel)
    {
        return response()->json($pastel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pastel  $pastel
     * @return \Illuminate\Http\Response
     */
    public function edit(Pastel $pastel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pastel  $pastel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pastel $pastel)
    {
        $pastel->fill($request->post())->save();
        return response()->json([            
            'pastel'=>$pastel
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pastel  $pastel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pastel $pastel)
    {
        $pastel->delete();
        return response()->json([
            'mensaje'=>'¡Registro eliminado correctamente!'
        ]);
    }
}

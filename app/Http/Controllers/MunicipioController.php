<?php

namespace App\Http\Controllers;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = DB::table('tb_comuna')
            ->join('tb_municipio', 'tb_municipio.muni_codi')
            -select('tb_municipio.*', 'tb_municipio.muni_nomb')
            ->get();
        return view ('municipio.index', ['municipio' => $municipios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = DB::table('tb_municipio')
            ->orderBy('muni_nomb')
            ->get();
        return view('municipio.new', ['municipios' => $municipios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipio = new Municipio();

        $municipio->muni_nomb = $request->name;
        $municipio->muni_codi = $request->code;
        $municipio->save();

        $municipio = DB::table('tb_municipio')
            ->join('tb_municipio', 'tb_municipio.muni_codi', '=', 'tb_municipio.muni_codi')
            ->select('tb_municipio.*', "tb_municipio.muni_nomb")
            ->get();
        return view('municipio.index', ['municipios '=> $municipios]);
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
        //
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

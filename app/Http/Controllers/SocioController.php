<?php

namespace App\Http\Controllers;
use App\Models\Socio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

// lista il valore delle variabili globali
use Illuminate\Support\Facades\Config;

$value = Config::get('app.name');
echo "Name: ".$value."<br>"; 

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //public function index(Socio $socio)
    //{
        //
        //dd( $socio );
        //return view('socio.test', ['socio' => $socio]);
        //return 'ciao';
    //}
    public function index(Socio $socio)
    {
       // $soci = DB::table('soci')->get();
        dd($socio::all() );
        return view('socio.elencoSoci', ['socio' => $socio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Socio $socio)
    {
        //
        //dd($socio );
        return view('socio.dettaglioSocio', ['socio' => $socio]);
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

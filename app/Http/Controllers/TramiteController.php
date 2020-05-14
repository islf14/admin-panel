<?php

namespace App\Http\Controllers;

use App\Tramite;
use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tramites = Solicitud::get();
        // $tramites = DB::table('solicitud')->get();
        $tramites = DB::table('solicitud as s')
                        ->join('users as u','s.users_id','=','u.id')
                        ->join('estadosolicitud as e','s.estadosolicitud_id','=','e.id')
                        ->join('tramite as t','s.tramite_id','=','t.id')
                        ->select('s.id',
                        's.solicitud',
                        's.fecha',
                        'u.name',
                        'e.nombre as est_nombre',
                        't.nombre as tra_nombre')
                        ->get();
        return view('adminpanel.tramite.index',compact('tramites'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function show(Tramite $tramite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function edit(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}

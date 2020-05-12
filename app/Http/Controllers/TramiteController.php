<?php

namespace App\Http\Controllers;

use App\Tramite;
use App\Solicitud;
use App\Adjunto;
use App\Movimiento;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientepanel.tramite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_actual = Carbon::now();

        // $archivo = $request->group_a[0]["archivo"];
        // $ruta = Storage::disk('public')->put('archivos', $archivo);

        // echo "reg inicio: ".$ruta."<br/>";

        //Crea solicitud
        $datos["solicitud"] = "sol nueva";
        $datos["fecha"] = $fecha_actual;
        $datos["estadosolicitud_id"] = 1;
        $datos["tramite_id"] = 1;
        $datos["users_id"] = 4;
        try{
            $solicitud_r = Solicitud::create($datos);
            $idSol = $solicitud_r["id"];
        } catch(QueryException $e){
            dd($e);
        }

        //Recupera y guarda archivos
        $long_a = count($request->group_a);
        $idsAdjunto = Array();

        //Crea adjuntos
        for($i=0;$i<$long_a;$i++){

            $archivo = $request->group_a[$i]["archivo"];
            $nombre = $request->group_a[$i]["name"];
            $ruta = Storage::disk('public')->put('archivos', $archivo);
            
            echo "reg for: ".$ruta."<br/>";

            $adjunto["nombre"] = $nombre;
            $adjunto["solicitud_id"] = $idSol;
            $adjunto["ruta"] = $ruta;
            $adjunto["fecha"] = $fecha_actual;
            $adjunto["users_id"] = 4;//4 5
            $adjunto["tipopersona_id"] = 2;
            try{
                $adjunto_r = Adjunto::create($adjunto);
                $idAdj = $adjunto_r["id"];
                $idsAdjunto[$i] = $idAdj;//guarda los id
            } catch(QueryException $e){

                if($long_a>1 && count($idsAdjunto)>0){
                    Adjunto::destroy($idsAdjunto);
                }
                Solicitud::destroy($idSol);
                dd($e);
            }
        }
        
        //Crea primer movimiento
        $movimiento["observacion"] = "";
        $movimiento["solicitud_id"] = $idSol;
        $movimiento["fecha"] = $fecha_actual;
        $movimiento["tipomovimiento_id"] = 1;//1 5
        try{
            $movimiento_r = Movimiento::create($movimiento);
            $idMov = $movimiento_r["id"];
        } catch(QueryException $e) {
            Adjunto::destroy($idsAdjunto);
            Solicitud::destroy($idSol);
            dd($e);
        }


        $url2 = url(Storage::url($ruta));
        // return redirect()->away($url2);
        echo "idsol: ".$idSol."<br/>";
        echo "idAdj: ".$idAdj."<br/>";
        echo "idMov: ".$idMov."<br/>";
        echo "long_a: ".$long_a."<br/>";
        echo "<br/>";
        echo "url: ".$url2."<br/>";

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

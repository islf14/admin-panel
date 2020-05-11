<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Solicitud;
use App\Adjunto;
use App\Movimiento;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class ArchivoController extends Controller
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
        dd("en create");
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

        $archivo = $request->group_a[0]["archivo"];
        $ruta = Storage::disk('public')->put('archivos', $archivo);

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
        echo "idsol ".$idSol."<br/>";
        echo $idAdj."<br/>";
        echo $idMov."<br/>";
        echo $long_a."<br/>";
        echo "<br/>";
        echo $url2."<br/>";
        dd($idsAdjunto);


        //User::find($id)->delete();

        // $name = str_replace(' ','_',$archivo->getClientOriginalName()).'_file_'.time().'.'.$archivo->getClientOriginalExtension();
        // $path = public_path().'/resources/archivos/';
        // $ruta = $path.$name;

        // $ret = $archivo->store('archivito.jpg');
        // $ret = Storage::put('carpetaone', $archivo);

        

        // $ret = Storage::disk('public')->get('archivos/c7BNZnHtmcaoyKdu6r4Pfh7btquEcJteE1XGgde0');

        // return Storage::disk('public')->download('archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg','fotito.jpeg');

        // echo asset('storage/6rbmQFVIggNv41lxIkywAzeAtGEpY0EQN591TGla.jpeg');
        // echo asset('storage/archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg')

        // $con = Storage::get('carpetaone/Zac1C3Z3cWmnyhaprTWGtBDU99lBd72BHj5ZhxDl.jpeg');

        // $ret = Storage::url('carpetaone/Zac1C3Z3cWmnyhaprTWGtBDU99lBd72BHj5ZhxDl.jpeg');
        // $url = Storage::disk('public')->url('ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg');
        

        
        // $ret = Storage::disk('public')->size('archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg');
        


        // echo $visibility;
        


        // dd($b);
        // dd($a["archivo"]);
        // $on = $a["archivo"]->originalName;
        // dd($on);

        // $file = $request->file("archivo");
        // dd($file);

        // dd(count($request->group_a));
        // dd($);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        //
    }
}

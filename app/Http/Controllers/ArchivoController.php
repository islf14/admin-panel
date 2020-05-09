<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
        $archivo = $request->group_a[0]["archivo"];


        // $name = str_replace(' ','_',$archivo->getClientOriginalName()).'_file_'.time().'.'.$archivo->getClientOriginalExtension();
        // $path = public_path().'/resources/archivos/';
        // $ruta = $path.$name;

        // $ret = $archivo->store('archivito.jpg');
        // $ret = Storage::put('carpetaone', $archivo);

        $ret = Storage::disk('public')->put('archivos', $archivo);

        // $ret = Storage::disk('public')->get('archivos/c7BNZnHtmcaoyKdu6r4Pfh7btquEcJteE1XGgde0');

        // return Storage::disk('public')->download('archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg','fotito.jpeg');

        // echo asset('storage/6rbmQFVIggNv41lxIkywAzeAtGEpY0EQN591TGla.jpeg');
        // echo asset('storage/archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg')

        // $con = Storage::get('carpetaone/Zac1C3Z3cWmnyhaprTWGtBDU99lBd72BHj5ZhxDl.jpeg');

        // $ret = Storage::url('carpetaone/Zac1C3Z3cWmnyhaprTWGtBDU99lBd72BHj5ZhxDl.jpeg');
        // $url = Storage::disk('public')->url('ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg');
        $url2 = url(Storage::url($ret));

        
        // $ret = Storage::disk('public')->size('archivos/ERAH8PPiatXIY6OxP6kDvZhAKW24pNCcVJy51pSY.jpeg');
        
        return redirect()->away($url2);
        echo $ret."<br/>";
        // echo $url."<br/>";
        echo $url2."<br/>";


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

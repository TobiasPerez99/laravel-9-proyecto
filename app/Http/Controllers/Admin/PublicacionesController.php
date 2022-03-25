<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Publicaciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicaciones::all();
        // return datatables(User::query())->toJson();
        return view('admin.publicaciones.index' , compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Publicaciones::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(publicaciones $publicaciones)
    {
        return view('admin.publicaciones.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(publicaciones $publicaciones)
    {
        return view('admin.publicaciones.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicaciones $publicaciones)
    {
        //
    }

    public function get(){
        return datatables()->of(Publicaciones::query())->make(true);
    }
}

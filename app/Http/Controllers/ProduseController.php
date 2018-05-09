<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produse;
use App\Http\Resources\Produse as ProduseResource; //pt ca tot Produse ii si numele model-ului

class ProduseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produse = Produse::paginate(15);

        //daca se returneaza o lista de resurse, trebuie folosit collection

        return ProduseResource::collection($produse);
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
        $produs = $request->isMethod('PUT') ? Produse::findOrFail($request->produs_id) : new Produse;
        $produs->id = $request->input('produs_id');        
        $produs->titlu = $request->input('titlu');
        $produs->descriere = $request->input('descriere');
        if($produs->save()) {
            return new ProduseResource($produs);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produs = Produse::findOrFail($id);
        return new ProduseResource($produs);
        //returneaza un produs care by default are wrapping in data{...}, daca il vrem fara wrapping, in AppServiceProvider adaugam Resource::withoutWrapping();
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
        $produs = Produse::findOrFail($id);

        if($produs->delete()){
            return new ProduseResource($produs);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especie = new Especie();
		$especies = Especie::All();
		return view("especie.index", [
			"especie" => $especie,
			"especies" => $especies
		]);
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
        if ($request->get("id") != ""){
			$especie = Especie::find($request->get("id"));
		} else {
			$especie = new Especie();
		}
		
		$especie->descricao = $request->get("descricao");
		$especie->save();
		
		$request->session()->flash("salvar", "Salvo com sucesso!");
		
		return redirect("/especie");
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
        $especie = Especie::find($id);
		$especies = Especie::All();
		return view("especie.index", [
			"especie" => $especie,
			"especies" => $especies
		]);
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
    public function destroy(Request $request, $id)
    {
        Especie::destroy($id);
		
		$request->session()->flash("excluir", "Excluido com sucesso");
		
		return redirect("/especie");
    }
}

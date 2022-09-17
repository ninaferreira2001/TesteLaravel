<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Cadastro, Alunos, User};

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('cadastro.index')
        ->with(compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastro = null;
        return view('cadastro.form')->with(compact('cadastro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro($request->all());
        $cadastro->nome = strtoupper($request->nome);
        $cadastro->fill($request->all());
        $cadastro->save();

        return redirect()->route('cadastro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
       $cadastro = Cadastro::find($id);
       if(!$cadastro)
       {
            return redirect()->route('cadastro.index');
       }
       return view('cadastro.show')->with(compact('cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $cadastro = Cadastro::find($id);
        return view('cadastro.form')->with(compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
       $cadastro = Cadastro::find($id);
       $cadastro->fill($request->all());
       $cadastro->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro $cadastro)
    {
        //
    }
}

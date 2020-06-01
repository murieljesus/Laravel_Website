<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyect;

class portfoliocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Proyect::latest()->paginate();
        return view('portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyect.crear', ['datos' => new Proyect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $campos = request()->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        Proyect::create([
            'title' => request('title'),
            'descripcion' => request('desc'),
        ]);
        return redirect()->route('portfolio.index')->with('status', 'El proyecto se guardo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('proyect.show', ['datos' => Proyect::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $datos)
    {



        return view('proyect.edit', ['datos' => $datos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Proyect $datos)
    {

        $campos = request()->validate([
            'title' => 'required',
            'desc' => 'required'

        ]);

        $datos->update([
            'title' => request('title'),
            'descripcion' => request('desc'),
        ]);
        return view('proyect.show', ['datos' => $datos])->with('status', 'El proyecto se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $datos)
    {
        $datos->delete();
        return redirect()->route('portfolio.index')->with('status', 'El proyecto se elimino con exito');
    }
}

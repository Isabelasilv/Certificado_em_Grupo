<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Palestra;
use App\Models\Escola;

use App\Http\Requests\PalestraRequest;

class PalestraController extends Controller
{

    public function index()
    {
        $palestra = Palestra::all();
        return view('palestra.index', compact('palestra'));
    }


    public function create()
    {
        $escola = Escola::all();
        $palestra = Palestra::all();
        return view('palestra.create', compact('palestra','escola'));
    }


    public function store(PalestraRequest $request)
    {
        $palestra = new Palestra();
        $palestra->tema = $request->input('tema');
        $palestra->palestrante = $request->input('palestrante');
        $palestra->periodo = $request->input('periodo');
        $palestra->cidade = $request->input('cidade');
        $palestra->horas = $request->input('horas');

        $palestra->save();
        return redirect()->route('palestra.index', compact('palestra'));
    }


    public function edit($id)
    {
        $escola = Escola::all();
        $palestra = Palestra::find($id);
        if(isset($palestra)){
            return view ('palestra.edit', compact('palestra','escola'));
        }
            return view ('palestra.index');
    }

    public function show($id)
    {
        $escola = Escola::all();
        $palestra = Palestra::find($id);
        if(isset($palestra)){
            return view ('palestra.show', compact('palestra','escola'));
        }
            return view ('palestra.index');
    }


    public function update(PalestraRequest $request, $id)
    {
        $palestra = Palestra::find($id);
        if(isset($palestra)){
        $palestra->tema = $request->input('tema');
        $palestra->palestrante = $request->input('palestrante');
        $palestra->periodo = $request->input('periodo');
        $palestra->cidade = $request->input('cidade');
        $palestra->horas = $request->input('horas');
        $palestra->save();
        }
            return redirect()->route('palestra.index', compact('palestra'));
    }


    public function destroy($id)
    {
        $palestra = Palestra::find($id);
        if(isset($palestra))
        {
            $palestra->delete();
        }
        return redirect()->route('palestra.index');
    }
}

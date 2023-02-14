<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;

/**
 * Class TarjetaController
 * @package App\Http\Controllers
 */
class TarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $search=$request->get('search');
        $tarjetas = Tarjeta::where('cod_socio','like','%'.$search.'%')->
        orWhere('nombre','like','%'.$search.'%')
        ->orWhere('apellido1','like','%'.$search.'%')
        ->orWhere('apellido2','like','%'.$search.'%')
        ->orWhere('numero_tc','like','%'.$search.'%')->paginate();

        

        return view('tarjeta.index', compact('tarjetas'))
            ->with('i', (request()->input('page', 1) - 1) * $tarjetas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarjeta = new Tarjeta();
        return view('tarjeta.create', compact('tarjeta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarjeta::$rules);

        $tarjeta = Tarjeta::create($request->all());

        return redirect()->route('tarjetas.index')
            ->with('success', 'Tarjeta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarjeta = Tarjeta::find($id);

        return view('tarjeta.show', compact('tarjeta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarjeta = Tarjeta::find($id);

        return view('tarjeta.edit', compact('tarjeta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarjeta $tarjeta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarjeta $tarjeta)
    {
        request()->validate(Tarjeta::$rules);

        $tarjeta->update($request->all());

        return redirect()->route('tarjetas.index')
            ->with('success', 'Tarjeta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarjeta = Tarjeta::find($id)->delete();

        return redirect()->route('tarjetas.index')
            ->with('success', 'Tarjeta deleted successfully');
    }
}

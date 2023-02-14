<?php

namespace App\Http\Controllers;

use App\Models\Ahorro;
use Illuminate\Http\Request;

/**
 * Class AhorroController
 * @package App\Http\Controllers
 */
class AhorroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ahorros = Ahorro::paginate();

        return view('ahorro.index', compact('ahorros'))
            ->with('i', (request()->input('page', 1) - 1) * $ahorros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ahorro = new Ahorro();
        return view('ahorro.create', compact('ahorro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ahorro::$rules);

        $ahorro = Ahorro::create($request->all());

        return redirect()->route('ahorros.index')
            ->with('success', 'Ahorro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ahorro = Ahorro::find($id);

        return view('ahorro.show', compact('ahorro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ahorro = Ahorro::find($id);

        return view('ahorro.edit', compact('ahorro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ahorro $ahorro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ahorro $ahorro)
    {
        request()->validate(Ahorro::$rules);

        $ahorro->update($request->all());

        return redirect()->route('ahorros.index')
            ->with('success', 'Ahorro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ahorro = Ahorro::find($id)->delete();

        return redirect()->route('ahorros.index')
            ->with('success', 'Ahorro deleted successfully');
    }
}

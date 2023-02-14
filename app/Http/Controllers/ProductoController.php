<?php

namespace App\Http\Controllers;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\Producto;
use App\Models\Ahorro;
use App\Models\Cliente;
use App\Models\Prestamo;
use App\Models\Seguro;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        $search=$request->get('search');
        //$start_date = $request->input('start_date');
        if($request->input('start_date')==null){
            $start_date=Carbon::today()->addDays(-30);
        }else{
            $start_date = $request->input('start_date');
        }

        if($request->input('end_date')==null){
            $end_date=Carbon::today();
        }else{
            $end_date = $request->input('end_date');
        }
        


        
        $productos = Producto::where('codigo','like','%'.$search.'%')
        ->whereBetween('contact_date', [$start_date, $end_date])->paginate();
        
        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $cliente = Cliente::pluck('id');
        $prestamo = Prestamo::pluck('name', 'id');
        $ahorro = Ahorro::pluck('name', 'id');
        $seguro = Seguro::pluck('name', 'id');
        $user = User::pluck('name' ,'id');
        return view('producto.create', compact('user' , 'producto', 'cliente', 'ahorro', 'seguro', 'prestamo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $cliente = Cliente::pluck('id');
        $user = User::pluck('id');
        $prestamo = Prestamo::pluck('name', 'id');
        $ahorro = Ahorro::pluck('name', 'id');
        $seguro = Seguro::pluck('name', 'id');

        return view('producto.edit', compact('user','producto', 'cliente', 'prestamo', 'ahorro', 'seguro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }



}

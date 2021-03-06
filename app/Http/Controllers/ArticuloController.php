<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JeroenNoten\LaravelAdminLte\View\Components\Widget\Alert;

class ArticuloController extends Controller
{
    public function __construct()
    {
      //# Ver si esto se puede realizar de forma mas global o sea para toda la aplicacion
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articulo.index');
    }

    // public function datatable()
    // {
    //     // $articulos = Articulo::all();
    //     // $articulos = DB::table('articulos')->orderBy('descripcion','desc')->get();

    //     $articulos = DB::table('articulos')
    //         ->select('id', 'codigo', 'descripcion', 'cantidad', 'precio')
    //         ->orderBy('descripcion', 'desc')
    //         ->get();

    //     return datatables()->of($articulos)->toJson();

    //     // return datatables()->query(DB::table('users'))->toJson();

    //     // return view('articulo.index')->with('articulos',$articulos);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();

        $articulos->codigo = $request->get('codigo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');

        $articulos->save();
        // Alert::success('STORE', 'Success Message');

        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    // public function edit(Articulo $articulo)
    public function edit($id)
    {
        $articulo = Articulo::find($id);

        return view('articulo.edit')->with('articulo', $articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Articulo $articulo)
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Articulo $articulo)
    public function destroy($id)
    {
        // $id = 9999;
        $deleted = DB::table('articulos')->where('id', '=',$id)->delete();

        // check data deleted or not
        if ($deleted >= 1) {
            $success = true;
            $message = "Art??culo borrado con exito!";
        } else {
            $success = false;
            $message = "No se pudo borrar el art??culo...";
        }

        return response()->json([
            'success' => $success,
            'message' => $message
        ]);

        // $delete = Articulo::find($id);
        // $delete->delete();
        // return redirect('/articulos');
        // return response()->json(['success','Registro borrado exitosamente!']);

        // return response()->json(['success',$delete]);
        // return redirect('/articulos')->with('status', 'Registro borrado!');

        // return view('articulo.index');
    }
}

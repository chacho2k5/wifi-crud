<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{

    public function articulos() {
        $articulos = DB::table('articulos')
        // ->select('id', 'codigo', 'descripcion', 'cantidad', 'precio')
        ->select('articulos.*')
        ->orderBy('descripcion', 'asc')
        ->get();
        return DataTables()::of($articulos)
            ->addColumn('actions','articulo.action')    //columna de dt y vista
            ->rawColumns(['actions'])   //es para procesar el html
            ->toJson();
    }

}

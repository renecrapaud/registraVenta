<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Ingreso;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function registraIngreso(Request $request){
        $registro = new Ingreso();
        $registro->fecha = date_format(date_create('now'), 'Y-m-d');
        $registro->cantidad = $request->input('precio');
        $registro->categoria = $request->input('categoria');
        $registro->save();
        return redirect('/');
    }
}

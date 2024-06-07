<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    //
    public function index(){
        $servicios=Servicio::orderby('titulo','asc')->paginate(15);
        return view('servicios',compact('servicios'));
    }

    public function show($id) {
        $servicio = Servicio::find($id);
    
        return view('show', ['servicio' => $servicio]);
    }
    
}

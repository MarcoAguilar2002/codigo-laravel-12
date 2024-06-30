<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::orderby('titulo', 'asc')->paginate(6);
        return view('servicios', compact('servicios'));
    }

    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('show', ['servicio' => $servicio]);
    }

    public function create()
    {
        return view('create',[
            'servicio' => new Servicio
        ]);
    }

    public function store(CreateServicioRequest $request)
    {
        Servicio::create($request->validated());
        return redirect()->route('servicios');
    }

    public function edit(Servicio $id){
        return view('edit',[
            'servicio' => $id
        ]);
    }

    public function update(Servicio $id,CreateServicioRequest $request){
        $id->update($request->validated());
    
        return redirect()->route('servicios.show',$id);
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();

        return redirect()->route('servicios');
    }
}

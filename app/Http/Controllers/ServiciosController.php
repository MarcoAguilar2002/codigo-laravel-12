<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }

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
        $servicio = new Servicio($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();
        return redirect()->route('servicios.index')->with('estado', 'El servicio fue creado correctamente');
    }

    public function edit(Servicio $servicio){
        return view('edit',[
            'servicio' => $servicio
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){
    if ($request->hasFile('image')) {
        $servicio->fill($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();
    } else {
        $servicio->update(array_filter($request->validated()));
    }

    return redirect()->route('servicios.show', $servicio)->with('estado', 'El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();
        return redirect()->route('servicios.index')->with('estado', 'El servicio fue eliminado correctamente');
    }
}

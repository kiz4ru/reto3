<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpleadosController extends Controller
{
  
    public function index()
    {
        $empleado = Empleados::all();
        return view('empleados.index', compact('empleado'));
    }

    public function create()
    {
        return view('empleados.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([

            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
            
        ]);

        $empleado = new Empleados([

            'nombre'=>$request->get('nombre'),

            'apellido'=>$request->get('apellido'),

            'email'=>$request->get('email'),

            'telefono'=>$request->get('telefono'),

            'direccion'=>$request->get('direccion')
        ]);
        
        $empleado->save();
        return redirect()->back();
    }



    public function show($id)
    {
        $empleado = Empleados::find($id);
        return view('empleados.show', ['empleados' => $empleado]);
    }

    
    public function edit($id){
        $empleados = empleados::find($id);
        return view('empleados.edit', compact('empleados'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([

            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
            
        ]);

        $empleado = Empleados::find($id);
        $empleado->nombre = $request->get('nombre');
        $empleado->apellido = $request->get('apellido');
        $empleado->email = $request->get('email');
        $empleado->telefono = $request->get('telefono');
        $empleado->direccion = $request->get('direccion');
        $empleado->save();
        return redirect()->route('empleados.index', ['empleado' => $empleado]);
    }

    
    public function destroy($id)
    {
        $empleado = Empleados::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index', ['empleado' => $empleado]);
    }
}

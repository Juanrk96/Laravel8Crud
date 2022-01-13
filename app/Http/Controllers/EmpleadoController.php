<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EmpleadoModel;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = EmpleadoModel::all();
      return view ('empleados.index')->with('empleados', $empleados);
    }
 
    
    public function create()
    {
        return view('empleados.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        EmpleadoModel::create($input);
        return redirect('empleados')->with('flash_message', 'Contact Addedd!');  
    }
 
    
    public function show($id)
    {
        $contact = EmpleadoModel::find($id);
        return view('empleados.show')->with('empleados', $contact);
    }
 
    
    public function edit($id)
    {
        $contact = EmpleadoModel::find($id);
        return view('empleados.edit')->with('empleados', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $contact = EmpleadoModel::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('empleados')->with('flash_message', 'Contact Updated!');  
    }
 
  
    public function destroy($id)
    {
        EmpleadoModel::destroy($id);
        return redirect('empleados')->with('flash_message', 'Contact deleted!');  
    }
}

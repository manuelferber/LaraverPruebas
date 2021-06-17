<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UserFormController extends Controller
{
    
    public function consultarid(Request $request)
    {
        return UserForm::find($request->id);;
    }
    
    public function colsultalls()
    {
        return UserForm::all();;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'correo' => 'required|unique:usuarios|email',
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required|unique:usuarios|numeric',
            'telefono' => 'required|numeric'
        ]);
    
        if ($validator->fails()) {
            return response(["error" => true, "errors" => $validator->errors()],422);
                        
        }
        $usuario = new UserForm;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->cedula = $request->cedula;
        $usuario->correo = $request->correo;
        $usuario->telefono= $request->telefono;
        $usuario->save(); 
        return response(["error" => false],200);
    }
    
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'correo' => [
            'required',
            'email',
            Rule::unique('usuarios')->ignore($request->id),
            ],
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => [
                'required',
                'numeric',
                Rule::unique('usuarios')->ignore($request->id),
                ],
            'telefono' => 'required|numeric'
        ]);
    
        if ($validator->fails()) {
            return response(["error" => true, "errors" => $validator->errors()],422);
        }

        $usuario  = UserForm::find($request->id);
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->cedula = $request->cedula;
        $usuario->correo = $request->correo;
        $usuario->telefono= $request->telefono;
        $usuario->save(); 
        return response(["error" => false],200);
    }
    public function destroy(Request $request)
    {
        $usuario = UserForm::find($request->id);

        $usuario->delete();

        return 'usuario Eliminado';
    }
}

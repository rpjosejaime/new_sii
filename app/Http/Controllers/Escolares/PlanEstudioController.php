<?php

namespace App\Http\Controllers\Escolares;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanEstudio;

use Illuminate\Database\QueryException;

class PlanEstudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $planes = PlanEstudio::all();
        /* $test = 'Hola Mundo';
        $name = 'Jaime'; */
        //return view('escolares.planes-estudio', ['test' => $test]);
        return view('escolares.planes-estudio', compact('planes'));
    }

    public function updatePlanEstudio (Request $request, $id){
        //$data = $request->all();
        //return $request;
        try {
            // Tu lógica para actualizar el plan de estudios aquí
            $plan = PlanEstudio::findOrFail($id);
            //$plan =  select * from planes_estudio where id = $id
            $plan->clave_plan_estudio = $request->txtClave;
            $plan->carrera = $request->txtCarrera;
            // Actualiza otros campos si es necesario...
            $plan->save();
            return back()->with("Correcto", "Plan de estudio modificado correctamente");
        }
        catch (QueryException $e) {
            // Verificar si el error es debido a una restricción de unicidad
            if ($e->errorInfo[1] == 1062) {
                return back()->with("Incorrecto", "Error, la clave del plan ya existe");
            }
        
            // Si no es una restricción de unicidad, puedes manejar otros tipos de errores aquí
            return back()->with("Incorrecto", "Error desconocido");
        }
    }
}


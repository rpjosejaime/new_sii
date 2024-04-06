<?php

namespace App\Http\Controllers\Escolares;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlanEstudio;

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
}

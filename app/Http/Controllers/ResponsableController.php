<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    // Resto de tus métodos y lógica en el controlador

    public function store(Request $request)
    {
        $responsable = new Responsable();
        $responsable->nombre = 'Eduardo';
        $responsable->save();

        return redirect()->route('responsable');
    }
}

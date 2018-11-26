<?php     

namespace App\Http\Controllers;

use App\Clase;

use App\Materia;

use Illuminate\Http\Request;

use App\Http\Requests\ClaseRequest;

use Illuminate\Support\Facades\Storage;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::orderBy('id', 'ASC')->paginate();

        return view('clases.index', compact('clases'));
    }

    public function create()
    {
        
        return view('clases.create');
    }

    public function store(ClaseRequest $request)
    {
        $clase = new Clase;
        
        $clase->nombreclase  = $request->nombreclase;
        $clase->profesor  = $request->profesor;
        $clase->cupos  = $request->cupos;
        $materias = Materia::all()->pluck('nombrem', 'id');

        
       

        $clase->save();

        return redirect()->route('clases.index')->with('info', 'La clase fue guardada');
    }

    public function edit($id)
    {
        $clase = Materia::find($id);
        
        return view('clases.edit', compact('clase'));
    }

    public function update(ClaseRequest $request, $id)
    {
        $clase = Clase::find($id);
        
        $clase->nombreclase = $request->nombreclase;
        $clase->profesor  = $request->profesor;
        $clase->cupos  = $request->cupos;

       
        $clase->save();

        return redirect()->route('clases.index')->with('info', 'La clase fue actualizada');
    }

    public function show($id)
    {
        $clase = Clase::find($id);
        
        return view('clases.show', compact('clase'));
    }

    public function destroy($id)
    {
        $clase = Materia::find($id);
        $clase -> delete($id);
        
        return back()->with('info', 'La clase fue eliminada');
    }


}





<?php     

namespace App\Http\Controllers;

use App\Materia;

use Illuminate\Http\Request;

use App\Http\Requests\MateriaRequest;

use Illuminate\Support\Facades\Storage;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::orderBy('id', 'ASC')->paginate();

        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        
        return view('materias.create');
    }

    public function store(MateriaRequest $request)
    {
        $materia = new Materia;
        
        $materia->nombrem  = $request->nombrem;
        $materia->image  = $request->image;

        // IMAGE

        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $materia->fill(['image' => asset($path)])->save();
        }
       

        $materia->save();

        return redirect()->route('materias.index')->with('info', 'La materia fue guardada');
    }

    public function edit($id)
    {
        $materia = Materia::find($id);
        
        return view('materias.edit', compact('materia'));
    }

    public function update(MateriaRequest $request, $id)
    {
        $materia = Materia::find($id);
        
        $materia->nombrem  = $request->nombrem;
        $materia->image  = $request->image;

        // IMAGE

        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $materia->fill(['image' => asset($path)])->save();
        }
    
        $materia->save();

        return redirect()->route('materias.index')->with('info', 'La materia fue actualizada');
    }

    public function show($id)
    {
        $materia = Materia::find($id);
        
        return view('materias.show', compact('materia'));
    }

    public function destroy($id)
    {
        $materia = Materia::find($id);
        $materia -> delete($id);
        
        return back()->with('info', 'La materia fue eliminada');
    }


}

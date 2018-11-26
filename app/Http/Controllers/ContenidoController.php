<?php     

namespace App\Http\Controllers;

use App\Contenido;

use Illuminate\Http\Request;

use App\Http\Requests\ContenidoRequest;

use Illuminate\Support\Facades\Storage;

class ContenidoController extends Controller
{
    public function index()
    {
        $contenidos = Contenido::orderBy('id', 'ASC')->paginate();

        return view('contenidos.index', compact('contenidos'));
    }

    public function create()
    {
        
        return view('contenidos.create');
    }

    public function store(ContenidoRequest $request)
    {
        $contenido = new Contenido;
        
        $contenido->nombrec  = $request->nombrec;
        $contenido->objetivo  = $request->objetivo;
        // $materia->image  = $request->image;

        // IMAGE

        // if($request->file('image')){
        //     $path = Storage::disk('public')->put('image',  $request->file('image'));
        //     $materia->fill(['image' => asset($path)])->save();
        // }
       

        $contenido->save();

        return redirect()->route('contenidos.index')->with('info', 'El contenido fue guardado');
    }

    public function edit($id)
    {
        $contenido = Contenido::find($id);
        
        return view('contenidos.edit', compact('contenido'));
    }

    public function update(ContenidoRequest $request, $id)
    {
        $contenido = Contenido::find($id);
        
        $contenido->nombrec  = $request->nombrec;
        $contenido->objetivo  = $request->objetivo;
        // $materia->image  = $request->image;

        // IMAGE

        // if($request->file('image')){
        //     $path = Storage::disk('public')->put('image',  $request->file('image'));
        //     $materia->fill(['image' => asset($path)])->save();
        // }
    
        $contenido->save();

        return redirect()->route('contenidos.index')->with('info', 'El contenido fue actualizado');
    }

    public function show($id)
    {
        $contenido = Contenido::find($id);
        
        return view('contenidos.show', compact('contenido'));
    }

    public function destroy($id)
    {
        $contenido = Contenido::find($id);
        $contenido -> delete($id);
        
        return back()->with('info', 'El contenido fue eliminado');
    }


}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Proyecto;
use App\Models\Tblcategorium;
use Illuminate\Http\Request;



/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate();

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto();
        $categorias= Tblcategorium::pluck('nombre_c','id');
        return view('proyecto.create', compact('proyecto','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('imgpry')) {
            $requestData['imgpry'] = $request->file('imgpry')
                ->store('uploads', 'public');
        }

        /** */

        //request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($requestData);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       // $tblproyecto = tblProyecto::findOrFail($id);

        $proyecto = Proyecto::findOrFail($id);
        $categorias= Tblcategorium::pluck('nombre_c','id');
        return view('proyecto.edit', compact('proyecto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
        if ($request->hasFile('imgpry')) {
            $requestData['imgpry'] = $request->file('imgpry')
                ->store('uploads', 'public');
        }


        //request()->validate(Proyecto::$rules);

       // $proyecto->update($request->all());
       $proyecto = Proyecto::findOrFail($id);
       
       $proyecto->update($requestData);


        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto Actualizado successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto eliminado');
    }
}

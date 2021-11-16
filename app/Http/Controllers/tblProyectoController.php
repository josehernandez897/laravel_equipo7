<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\tblProyecto;
use Illuminate\Http\Request;

class tblProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $usuario=auth()->user()->id;
       //$usuario="hola";

        if (!empty($keyword)) {
            $tblproyecto = tblProyecto::where('nombrepry', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('imgpry', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
           //$tblproyecto = tblProyecto::latest()->paginate($perPage);
           $tblproyecto = tblProyecto::where('id_user', '=', "$usuario")->latest()->paginate($perPage);
        }

        return view('tbl-proyecto.index', compact('tblproyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    { 
         
        return view('tbl-proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('imgpry')) {
            $requestData['imgpry'] = $request->file('imgpry')
                ->store('uploads', 'public');
        }

        tblProyecto::create($requestData);

        return redirect('tbl-proyecto')->with('flash_message', 'tblProyecto added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tblproyecto = tblProyecto::findOrFail($id);

        return view('tbl-proyecto.show', compact('tblproyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tblproyecto = tblProyecto::findOrFail($id);

        return view('tbl-proyecto.edit', compact('tblproyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('imgpry')) {
            $requestData['imgpry'] = $request->file('imgpry')
                ->store('uploads', 'public');
        }

        $tblproyecto = tblProyecto::findOrFail($id);
        $tblproyecto->update($requestData);

        return redirect('tbl-proyecto')->with('flash_message', 'tblProyecto updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        tblProyecto::destroy($id);

        return redirect('tbl-proyecto')->with('flash_message', 'tblProyecto deleted!');
    }
}

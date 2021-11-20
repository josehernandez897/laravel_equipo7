<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Tblcategorium;
use Illuminate\Http\Request;

/**
 * Class TblcategoriumController
 * @package App\Http\Controllers
 */
class TblcategoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblcategoria = Tblcategorium::paginate();

        return view('tblcategorium.index', compact('tblcategoria'))
            ->with('i', (request()->input('page', 1) - 1) * $tblcategoria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblcategorium = new Tblcategorium();
        return view('tblcategorium.create', compact('tblcategorium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tblcategorium::$rules);

        $tblcategorium = Tblcategorium::create($request->all());

        return redirect()->route('tblcategoria.index')
            ->with('success', 'Tblcategorium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblcategorium = Tblcategorium::find($id);

        return view('tblcategorium.show', compact('tblcategorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblcategorium = Tblcategorium::find($id);

        return view('tblcategorium.edit', compact('tblcategorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblcategorium $tblcategorium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tblcategorium $tblcategorium)
    {
        request()->validate(Tblcategorium::$rules);

        $tblcategorium->update($request->all());

        return redirect()->route('tblcategoria.index')
            ->with('success', 'Tblcategorium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblcategorium = Tblcategorium::find($id)->delete();

        return redirect()->route('tblcategoria.index')
            ->with('success', 'Tblcategorium deleted successfully');
    }
}

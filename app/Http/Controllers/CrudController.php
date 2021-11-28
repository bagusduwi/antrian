<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::all();

        return view('crud.index', [
            'biodata' => $biodata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);

        try {
            Biodata::create($validated);
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect(url('/crud'))->with('status', ['response' => 'error', 'msg' => $ex->getMessage()]);
        }

        return redirect(url('/crud'))->with('status', ['response' => 'success', 'msg' => 'berhasil dibuat!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('crud.edit', [
            'biodata' => $biodata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);

        try {
            Biodata::where('id', $id)->update($validated);
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect(url('/crud'))->with('status', ['response' => 'error', 'msg' => $ex->getMessage()]);
        }

        return redirect(url('/crud'))->with('status', ['response' => 'success', 'msg' => 'berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Biodata::where('id', $id)->delete();
        } catch (\Illuminate\Database\QueryException $ex) {
            return session()->flash('status', ['response' => 'error', 'msg' => $ex->getMessage()]);
        }

        return session()->flash('status', ['response' => 'success', 'msg' => 'berhasil dihapus!']);
    }
}

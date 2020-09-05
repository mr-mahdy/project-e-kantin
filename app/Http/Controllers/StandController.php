<?php

namespace App\Http\Controllers;

use App\Stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stands = Stand::all();
        return view('admin.stand.index', compact('stands'));
    }

    public function create()
    {
        return view('admin.stand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penjual' => 'required|max:50|unique:stands'
        ]);

        Stand::create($request->all());

        return redirect('/stand')->with('statusStand', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stand $stand)
    {
        return view('admin.stand.edit', compact('stand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stand $stand)
    {
        $request->validate([
            'nama_penjual' => 'required|max:50|unique:stands'
        ]);

        Stand::where('id', $stand->id)->update([
            'nama_penjual' => $request->nama_penjual
        ]);
        return redirect('/stand')->with('statusStand', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stand $stand)
    {
        Stand::destroy($stand->id);

        return redirect('/stand')->with('statusStand', 'Data berhasil dihapus');
    }
}

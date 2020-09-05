<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Stand;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        $stands = Stand::all();
        return view('admin.menu.create', compact('categories', 'stands'));
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
            'gambar' => 'required|image|dimensions:max_width=170,max_height=170',
            'nama_menu' => 'required|max:50|unique:menus,nama_menu,NULL,id,id_stand,' . $request->id_stand,
            'id_stand' => 'unique:menus,id_stand,NULL,id,nama_menu,' . $request->nama_menu,
            'harga' => 'required|numeric'
        ]);

        $namaFile = $request->file('gambar')->getClientOriginalName();


        $menu = new Menu();
        $menu->nama_menu = $request->nama_menu;
        $menu->id_kategori = $request->id_kategori;
        $menu->id_stand = $request->id_stand;
        $menu->harga = $request->harga;
        $menu->gambar = $namaFile;

        $request->file('gambar')->move('img/food_menu/' . $namaFile);
        $menu->save();

        return redirect('/menu')->with('statusMenu', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        $stands = Stand::all();
        return view('admin.menu.edit', compact('categories', 'stands', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'gambar' => 'required|image|dimensions:max_width=170,max_height=170',
            'nama_menu' => 'required|max:50|unique:menus,nama_menu,NULL,id,id_stand,' . $request->stand,
            'stand' => 'unique:menus,id_stand,NULL,id,nama_menu,' . $request->nama_menu,
            'harga' => 'required|numeric'
        ]);

        $menu->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('img/food_menu/' . $request->file('gambar')->getClientOriginalName());
            $menu->gambar = $request->file('gambar')->getClientOriginalName();
            $menu->save();
        }

        return redirect('/menu')->with('statusMenu', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy($menu->id);

        return redirect('/menu')->with('statusMenu', 'Data berhasil dihapus');
    }
}

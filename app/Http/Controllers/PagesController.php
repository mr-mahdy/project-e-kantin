<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Reservation;
use App\Stand;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // page home
    public function home()
    {
        $tables = Table::all();
        $reservations = Reservation::all();
        return view('index', compact('tables', 'reservations'));
    }

    // page menu
    public function menu()
    {
        $categories = Category::all();
        $menus = Menu::all();

        return view('menu', compact('categories', 'menus'));
    }

    public function getData()
    {
        $result = DB::table('menus')->join('menu_categories', 'menus.id_kategori', '=', 'menu_categories.id')->join('stands', 'menus.id_stand', '=', 'stands.id')->select('menus.*', 'nama_kategori', 'stands.nama_penjual')->get();
        $menus = [];
        foreach ($result as $data) {
            $menus[] = [
                'id' => $data->id,
                'nama_menu' => $data->nama_menu,
                'harga' => $data->harga,
                'nama_kategori' => $data->nama_kategori,
                'gambar' => $data->gambar,
                'nama_penjual' => $data->nama_penjual
            ];
        }
        return json_encode($menus);
    }

    // page about
    public function about()
    {
        return view('about');
    }

    // page login admin
    public function login()
    {
        return view('login');
    }
}

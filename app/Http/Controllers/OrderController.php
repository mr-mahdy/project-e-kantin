<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->unique('id_res');
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        // $categories = Category::all();
        // $table = Stand::all();
        // return view('admin.order.create', compact('categories', 'stands'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::where('id_res', '=', $id)->get();
        $kode = Order::where('id_res', '=', $id)->get()->unique('id_res')[0]->reservation->kode_res;
        return view('admin.order.detail', compact('order', 'kode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_order' => 'required|max:50',
        //     'harga' => 'required|numeric'
        // ]);

        // order::create([
        //     'nama_order' => $request->nama_order,
        //     'id_kategori' => $request->nama_kategori,
        //     'id_stand' => $request->nama_penjual,
        //     'harga' => $request->harga
        // ]);

        // return redirect('/order')->with('statusOrder', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        // $tables = Table::all();
        // return view('admin.order.edit', compact('tables', 'order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'id_meja' => 'unique:orders,id_meja,NULL,id,waktu,' . $request->waktu,
            'waktu' => 'unique:orders,waktu,NULL,id,id_meja,' . $request->id_meja
        ]);

        // return date(strtotime($request->waktu));

        Order::where('id', $order->id)->update([
            'id_meja' => $request->id_meja,
            'waktu' => $request->waktu
        ]);
        return redirect('/order')->with('statusOrder', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::where('id_res', '=', $id)->get();
        foreach ($order as $row) {;
            Order::destroy($row->id);
        }

        return redirect('/order')->with('statusOrder', 'Data berhasil dihapus');
    }
}

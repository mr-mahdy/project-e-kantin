<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
    }

    public function create()
    {
        // $categories = Category::all();
        // $table = Stand::all();
        // return view('admin.reservation.create', compact('categories', 'stands'));
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
            'nama' => 'required|max:50',
            'no_hp' => 'required|numeric',
            'id_meja' => 'required|unique:reservations,id_meja,NULL,id,waktu,' . $request->waktu,
            'waktu' => 'required|unique:reservations,waktu,NULL,id,id_meja,' . $request->id_meja
        ]);

        // reservation::create([
        //     'nama_reservation' => $request->nama_reservation,
        //     'id_kategori' => $request->nama_kategori,
        //     'id_stand' => $request->nama_penjual,
        //     'harga' => $request->harga
        // ]);

        // return redirect('/reservation')->with('statusReservation', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        $tables = Table::all();
        return view('admin.reservation.edit', compact('tables', 'reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'id_meja' => 'unique:reservations,id_meja,NULL,id,waktu,' . $request->waktu,
            'waktu' => 'unique:reservations,waktu,NULL,id,id_meja,' . $request->id_meja
        ]);

        // return date(strtotime($request->waktu));

        Reservation::where('id', $reservation->id)->update([
            'id_meja' => $request->id_meja,
            'waktu' => $request->waktu
        ]);
        return redirect('/reservation')->with('statusReservation', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy($reservation->id);

        return redirect('/reservation')->with('statusReservation', 'Data berhasil dihapus');
    }
}

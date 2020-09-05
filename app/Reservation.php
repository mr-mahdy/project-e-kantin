<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['nama_menu', 'kode_res', 'id_cust', 'id_meja', 'waktu'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_cust');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'id_meja');
    }
}

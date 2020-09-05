<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['id_pesan', 'tgl_bayar', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_pesan');
    }
}

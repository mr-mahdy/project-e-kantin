<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id_res', 'id_menu', 'jumlah', 'sub_total'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'id_res');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}

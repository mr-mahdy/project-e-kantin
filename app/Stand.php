<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    protected $fillable = ['nama_penjual'];

    public function menu()
    {
        $this->hasMany(Menu::class);
    }
}

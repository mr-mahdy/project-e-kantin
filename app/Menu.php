<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama_menu', 'id_kategori', 'id_stand', 'harga', 'gambar'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori');
    }

    public function stand()
    {
        return $this->belongsTo(Stand::class, 'id_stand');
    }
}

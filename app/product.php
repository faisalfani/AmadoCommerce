<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable= ['nama_produk','category_id','foto_produk','deskripsi','harga','stok'];
    public function product(){
    	return $this->belongsto(Kategori::class,'category_id','id');
    }
}

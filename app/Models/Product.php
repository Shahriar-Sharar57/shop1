<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    protected $primaryKey='product_id';

    public function proCate(){
        return $this->belongsTo('App\Models\ProductCategory','pc_id','pc_id');
    }
    public function mainProCate(){
        return $this->belongsTo('App\Models\MainProductCategory','mpc_id','mpc_id');
    }
}

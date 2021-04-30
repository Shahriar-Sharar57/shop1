<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model{
    use HasFactory;

    protected $primaryKey='basic_id';

    public function creator(){
        return $this->belongsTo('App\Models\User','basic_creator','id');
    }
}

<?php

namespace crud;

use Illuminate\Database\Eloquent\Model;

class BuscarContoller extends Model
{
    public function scopeSearch( $query, $s){
      return $query->where('name','like', '%'. $s. '%')->orwhere('short', 'like', '%'. $s. '%')->orwhere('body', 'like', '%'. $s. '%')->orwhere('created_at', 'like', '%'. $s. '%');
    }
}

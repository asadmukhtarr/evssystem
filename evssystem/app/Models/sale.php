<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    //
    public function product(){
        return $this->belongsTo(product::class);
    }
}
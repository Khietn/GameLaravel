<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoiModel extends Model
{
    //
    protected $table='cau_hoi';
    public function linhVuc(){
        return $this->belongsTo("App\LinhVucModel");
    }
}

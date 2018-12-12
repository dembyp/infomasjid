<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Awal extends Model
{
    //
    //protected $table="kegiatans";
    public function user(){
        return $this->belongsTo(User::class);
      }

      public function masjid(){
        return $this->belongsTo(Masjid::class);
      }
}

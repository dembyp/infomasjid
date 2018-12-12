<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    protected $guarded=[];
    
    public function user(){
        return $this->belongsTo(User::class);
      }

      public function masjid(){
        return $this->belongsTo(Masjid::class);
      }
}

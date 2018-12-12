<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
   /* protected $fillable = [
        'name', 
        'address', 
        'city',
        'long',
        'lat',
        'email',
        'phone'
    ];*/
    protected $guarded=[];
    
    
    public function user(){
        return $this->belongsTo(User::class);
      }

    public function kegiatan(){
        return $this->hasMany(Kegiatan::class);
    }
}

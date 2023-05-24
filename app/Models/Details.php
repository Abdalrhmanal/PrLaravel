<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function sessoin(){
        return $this->belongsTo('App\Models\Sessoins','sessoins_id');
    }
}

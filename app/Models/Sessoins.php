<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessoins extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function course(){
        return $this->belongsTo('App\Models\Courses','courses_id');
    }

    public function details()
    {
        return $this->hasMany('App\Models\Details');
    }
}

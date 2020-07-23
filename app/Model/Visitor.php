<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected  $fillable = [];

    protected  $hidden = [];

    public function event(){
        $this->belongsTo('App\Model\Event');
    }
}

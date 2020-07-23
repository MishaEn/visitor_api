<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected  $fillable = ['name', 'city', 'start_date'];

    protected  $hidden = [];

    public function visitor(){
        $this->hasMany('App\Model\Visitor');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainor(){
        return $this->belongsTo('App\Trainor');//
    }

    public function trainees(){
        return $this->belongsTo('App\Trainees');
}

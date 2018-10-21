<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateCourse extends Model
{
    protected $table ='createcourses';
    public $primaryKey ='id';
    public $timestamps =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}




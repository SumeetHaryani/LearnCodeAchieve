<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public  $primarykey = 'id';

    public $timestamps = true;
    protected $fillable=['body','post_id'];
    public function post(){
        return $this->belongsTo('App\Post',$post_id);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

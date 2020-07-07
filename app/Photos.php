<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = "tb_photos";
    protected $primaryKey = 'id';
    protected $fillable = ['date','varchar','title','text','file','post_id'];
    public function post(){
    	return $this->belongsTo('App\Post','post_id');
    }
}

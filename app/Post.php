<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "tb_post";
    protected $primaryKey = 'id';
    protected $fillable = ['date','slug','title','text','cat_id'];
    public function category(){
    	return $this->belongsTo('App\Category','cat_id');
    }
}

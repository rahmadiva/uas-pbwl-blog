<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = 'id';
    protected $fillable = ['name','text','photos_id'];
    public function photo(){
    	return $this->belongsTo('App\Photos','photos_id');
    }
}

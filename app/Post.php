<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $pic_path = "/images/";

    use SoftDeletes;

//    protected $table = 'posts';
//    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'content', 'path'];


    public function user(){
        return $this->belongsTo('App\User', 'id');
    }


    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }


    public function tags(){
        return $this->morphToMany('App\Tag', 'tagable');
    }


    public static function scopeLatest($query){
        return $query->orderBy('id', 'desc')->get();
    }


    public function getPathAttribute($value){
        return $this->pic_path . $value;
    }

}

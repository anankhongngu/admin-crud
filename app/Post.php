<?php

namespace App;

use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

	// protected $fillable = [
 //        'title', 'description', 'photo',
 //    ];

    

    public function user() {
    	return $this->belongsTo(User::class); 
    }
    public function category() {
    	return $this->belongsTo(Category::class,'cat_id');
    }
}

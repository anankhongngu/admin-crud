<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

	// protected $fillable = [
 //        'name', 'email', 'password',
 //    ];

    
    public function posts() {
    	return $this->hasMany(Post::class, 'id');
    }
}

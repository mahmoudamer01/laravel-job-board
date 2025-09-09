<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = ["title" , "body" , "author" , "published"] ; // field can be mass assigned or updated 

    protected $gaurded = ["id"] ;   // feild cannot be mass assigned or updated
}

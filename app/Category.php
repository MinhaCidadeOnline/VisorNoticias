<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'name', 'body'];

    public function post()
    {
    	return $this->has('App\Post');
    }
}
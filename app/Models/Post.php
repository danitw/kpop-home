<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $table = 'publications';
	protected $fillable = ['title', 'tag', 'path_cover_image', 'path_image', 'content', 'creator_id'];

  public function relUsers() {
	  return $this->hasOne('App\User', 'id', 'creator_id');
	}
}
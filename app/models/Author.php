<?php

class Author extends \Eloquent {
	protected $fillable = ['name', 'twitter'];
    protected $hidden = ['created_at', 'updated_at'];

    public function posts()
    {
    	return $this->hasMany('Post');
    }
}
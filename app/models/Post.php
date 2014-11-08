<?php

class Post extends Eloquent {
	protected $fillable = ['title', 'active', 'body', 'author_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function author() {
        return $this->belongsTo('Author');
    }

    public function comments() {
        return $this->hasMany('Comment');
    }

    public function getActiveAttribute($value) {
        return (bool) $value;
    }
}
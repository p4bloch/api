<?php

class Comment extends \Eloquent {
	protected $fillable = ['name', 'comment', 'post_id'];

    public function getCreatedAtAttribute($created_at){
        return $created_at;
//        $carbon = new \Carbon\Carbon($created_at);
//        return $carbon->diffForHumans();
    }
}
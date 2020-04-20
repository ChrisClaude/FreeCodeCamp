<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // this is important, remember it when you get the fillable error
    // disabling mass assignment, we're are doing this because we are particular how we're bringing in the fields
    // otherwise we'd have to do it like in the User model
    protected $guarded = [];

    public function profileImage() {
        return ($this->image) ? '/storage/'. $this->image : '/img/No_image_available.svg.png';
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['about_us','our_mobile','our_email','our_facebook_link','our_twitter_link'];
    protected $table = 'about';
}

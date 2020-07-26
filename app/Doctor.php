<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name','title_jop','email','avatar','facebook_link','twitter_link','linked-in_link','mobile_number','status'];
    protected $table = 'doctors';















}

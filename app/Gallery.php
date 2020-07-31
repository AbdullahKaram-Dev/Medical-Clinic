<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image_0','image_1','image_2','image_3','image_4','image_5','status'];
    protected $table = 'galleries';






}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name','title_jop','email','avatar','facebook_link','twitter_link','linked-in_link','mobile_number','status','department_id'];
    protected $table = 'doctors';

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }












}

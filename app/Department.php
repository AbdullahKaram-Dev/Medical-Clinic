<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name','description','avatar'];
    protected $table = 'departments';


    public function doctor()
    {
        return $this->hasMany(Doctor::class,'department_id');
    }
}

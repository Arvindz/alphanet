<?php

namespace App\models;
use Jenssegers\Mongodb\Eloquent\Model;



class Course extends Model
{     
    protected $fillable = [
        'courseName', 'courseDuration', 'courseCode'
    ];
}

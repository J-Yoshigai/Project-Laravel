<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'email', 'age', 'sex', 'detail'];
}
/*
class Post extends Model
{
    protected $fillable = ['name', 'email', 'age'];
}    
*/
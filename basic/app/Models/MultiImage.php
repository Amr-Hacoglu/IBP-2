<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiImage extends Model
{
    use HasFactory;
    protected $guarded = [];
/*
  * The guarded property is an array that specifies a list of attributes that should be protected
 * from mass assignment. By default, all attributes are guarded, which means that they cannot
 * be mass assigned. When you set the $guarded property to an empty array, it means that
 * no attributes are guarded, and all attributes can be mass assigned.
 * For example, if you have a model with fields name, email, and password, you could
 * protect the password field from mass assignment by adding the following line to your model:
 * protected $guarded = ['password'];
This will prevent the password field from being set via mass assignment, but you can still set it explicitly using $model->password = 'new-password';
 * */

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevent extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'prevent';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'howMany'];

}

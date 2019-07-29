<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CCampaign extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'c_campaign';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    // public function campaign()
    // {
    //     return  $this->hasMany(\App\Models\CCampaign::class, 'idCampaign');
    // }
}

<?php

namespace GeneralSystemsVehicle\InOneEar\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['short', 'long', 'english', 'native'];
}

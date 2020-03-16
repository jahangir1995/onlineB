<?php

namespace App;
use Image;

use Illuminate\Database\Eloquent\Model;

class imageSlider extends Model
{
    protected $table ='image_sliders';
    protected $fillable =['image'];
}

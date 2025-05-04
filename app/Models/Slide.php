<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slide extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title','highlight_text','subtitle',
        'gradient_from','gradient_to','highlight_color',
        'button1_text','button1_link','button2_text','button2_link',
        'media_type','sort_order','active',
    ];
}

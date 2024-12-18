<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function eventImage()
    {
        return $this->hasOne(EventImage::class, 'event_id', 'id');
    }

    public function eventImages()
    {
        return $this->hasMany(EventImage::class, 'event_id', 'id');
    }
}

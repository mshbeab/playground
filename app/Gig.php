<?php

namespace Playground;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Playground\Gig\Image;
use Playground\Gig\Location;
use Playground\Http\Controllers\Controller;

class Gig extends Model
{
    /**
     * Gig Shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Gig Locations
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function mainImage()
    {
        return $this->images()->first()->src ?? 'http://placeholder.pics/svg/150x150/888888/EEE/'.$this->name;
    }

    public function getPriceAttribute($value)
    {
        return $value/100 ;
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}

<?php

namespace Playground\Gig;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function gigs()
    {
        $this->belongsToMany(Gig::class);
    }
}

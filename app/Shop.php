<?php

namespace Playground;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

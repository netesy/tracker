<?php

namespace Netesy\Tracker\Vendor\Laravel\Models;

class Path extends Base
{
    protected $table = 'tracker_paths';

    protected $fillable = [
        'path',
    ];
}

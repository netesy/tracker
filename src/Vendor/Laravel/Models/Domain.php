<?php

namespace Netesy\Tracker\Vendor\Laravel\Models;

class Domain extends Base
{
    protected $table = 'tracker_domains';

    protected $fillable = [
        'name',
    ];
}

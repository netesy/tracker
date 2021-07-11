<?php

namespace Netesy\Tracker\Vendor\Laravel\Models;

class Cookie extends Base
{
    protected $table = 'tracker_cookies';

    protected $fillable = ['uuid'];
}

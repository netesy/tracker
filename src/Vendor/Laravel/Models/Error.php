<?php

namespace Netesy\Tracker\Vendor\Laravel\Models;

class Error extends Base
{
    protected $table = 'tracker_errors';

    protected $fillable = [
        'message',
        'code',
    ];
}

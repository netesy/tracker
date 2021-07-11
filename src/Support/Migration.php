<?php

namespace Netesy\Tracker\Support;

use Netesy\Support\Migration as NetesyMigration;

abstract class Migration extends NetesyMigration
{
    protected function checkConnection()
    {
        $this->manager = app()->make('db');

        $this->connection = $this->manager->connection(config('tracker.connection'));

        parent::checkConnection();
    }
}

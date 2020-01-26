<?php

namespace App\Repositories;

use App\Service;

class ServiceRepository
{
    public function createService(string $name, string $serverId, int $port) : Service
    {
        return Service::create([
            'name' => $name,
            'server_id' => $serverId,
            'port' => $port
        ]);
    }
}

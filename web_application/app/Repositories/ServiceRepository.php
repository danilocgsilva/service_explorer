<?php

namespace App\Repositories;

use App\Service;
use App\Server;

class ServiceRepository
{
    public function createService(string $name, string $serverIp, int $port) : Service
    {
        $serverCheck = Server::where(['ip' => $serverIp]);
        if ($serverCheck->exists()) {
            $serverId = $serverCheck->first()->id;
        } else {
            $serverRepository = new ServerRepository();
            $createdServer = $serverRepository->createServer($serverIp);
            $serverId = $createdServer->id;
        }

        return Service::create([
            'name' => $name,
            'server_id' => $serverId,
            'port' => $port
        ]);
    }
}

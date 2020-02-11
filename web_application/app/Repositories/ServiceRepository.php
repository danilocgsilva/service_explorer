<?php

namespace App\Repositories;

use App\Service;
use App\Server;

class ServiceRepository
{
    /**
     * @param string $name
     * @param string $serverIp
     * @param integer $port
     * 
     * @return Service
     */
    public function createService(
        string $name, 
        string $serverIp, 
        int $port,
        string $path = null,
        string $username = null,
        string $password = null
    ) : Service
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
            'port' => $port,
            'path' => $path,
            'username' => $username,
            'password' => $password
        ]);
    }

    /**
     * @param integer $id
     * 
     * @return Service
     */
    public function getServiceById(int $id) : Service
    {
        return Service::find($id);
    }

    /**
     * @param Service $service
     * @param string $property
     * @param string $newValue
     * 
     * @return boolean
     */
    public function change(Service $service, string $property, string $newValue) : bool
    {
        return $service->update([$property => $newValue]);
    }
}

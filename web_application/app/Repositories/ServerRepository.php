<?php

namespace App\Repositories;

use App\Server;

class ServerRepository
{
    /**
     * @param string $ip
     * 
     * @return Server
     */
    public function createServer(string $ip, string $name = null) : Server
    {
        if (Server::where(['ip' => $ip])->exists()) {
            throw new RepositoryException('The server that you are triyng to create already have record.');
        }

        return Server::create([
            'ip' => $ip,
            'name' => $name
        ]);
    }

    /**
     * @param string $ip
     * 
     * @return Server
     */
    public function getServer(string $ip) : Server
    {
        return Server::where(['ip' => $ip])->first();
    }

    /**
     * @param Server $server
     * @param string $property
     * @param string $newValue
     * 
     * @return Server
     */
    public function change(Server $server, string $property, string $newValue) : bool
    {
        return $server->update([$property => $newValue]);
    }
}

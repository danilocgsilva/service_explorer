<?php

namespace App\Repositories;

use App\Server;

class ServerRepository
{
    public function createServer(string $ip) : Server
    {
        if (Server::where(['ip' => $ip])->exists()) {
            throw new RepositoryException('The server that you are triyng to create already have record.');
        }

        return Server::create([
            'ip' => $ip
        ]);
    }
}

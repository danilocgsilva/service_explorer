<?php

namespace App\Repositories;

use App\Service;

class ServiceRepository
{
    public function createService(string $name, string $server)
    {
        return Service::create([
            'name' => $name
        ]);
    }
}

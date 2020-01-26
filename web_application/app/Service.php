<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function scopeServerIp($query, string $serverIp)
    {
        $serverToFind = Server::where('ip', '=', $serverIp);

        if ($serverToFind->exists()) {
            return $query->where('server_id', '=', $serverToFind->id);
        }
        
        return $query;
    }
}

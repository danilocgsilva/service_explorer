<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = ['ip'];

    public function services()
    {
        return $this->hasMany(Service::class, 'server_id', 'id');
    }
}

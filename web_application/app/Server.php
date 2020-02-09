<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ip', 'name'];

    /**
     * Framework function the set that the Server have several Services
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'server_id', 'id');
    }
}

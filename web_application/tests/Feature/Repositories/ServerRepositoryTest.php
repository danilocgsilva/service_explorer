<?php

namespace Tests\Feature\Repositories;

use App\Repositories\ServerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Server;

class ServerRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var ServerRepository
     */
    private $serverRepository;

    /**
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $this->serverRepository = new ServerRepository();
    }

    /**
     * Tests if the Server are trully saved in the database
     *
     * @return void
     */
    public function testRecordServer() : void
    {
        $ip = "127.9.12.2";

        $this->serverRepository->createServer($ip);

        $this->assertTrue(Server::where('ip', '=', $ip)->exists());
    }

    /**
     * Tests if can search a server by ip
     *
     * @return void
     */
    public function testSearchServerByIp() : void
    {
        $ip = "127.187.23.121";

        $this->serverRepository->createServer($ip);

        $serverFetched = $this->serverRepository->getServer($ip);

        $this->assertInstanceOf(Server::class, $serverFetched);
    }

    /**
     * Tests if trully saves the server ip
     *
     * @return void
     */
    public function testRecordIp() : void
    {
        $ip = "234.108.94.0";

        $this->serverRepository->createServer($ip);

        $fetchedServer = $this->serverRepository->getServer($ip);

        $this->assertEquals($ip, $fetchedServer->ip);
    }

    /**
     * @return void
     */
    public function testeRecordName() : void
    {
        $name = "LDAP Server";
        $ipToFetch = "192.168.0.1";

        $this->serverRepository->createServer($ipToFetch, $name);

        $fetchedServer = $this->serverRepository->getServer($ipToFetch);

        $this->assertEquals($name, $fetchedServer->name);
    }
}

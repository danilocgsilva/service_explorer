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
}

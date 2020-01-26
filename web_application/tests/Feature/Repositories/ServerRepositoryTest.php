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
     * A basic feature test example.
     *
     * @return void
     */
    public function testRecordServer()
    {
        $ip = "127.9.12.2";

        $this->serverRepository->createServer($ip);

        $this->assertTrue(Server::where('ip', '=', $ip)->exists());
    }
}

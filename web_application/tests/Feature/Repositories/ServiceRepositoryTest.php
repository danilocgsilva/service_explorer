<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\ServiceRepository;
use App\Service;

class ServiceRepositoryTest extends TestCase
{
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;

    public function setUp() : void
    {
        $this->serviceRepository = new ServiceRepository();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRecordService()
    {
        $name = 'LDAP';
        $serverIp = '192.168.2.3';
        $port = '3456';

        $this->serviceRepository->createService($name, $serverIp, $port);

        $queryRetrieve = Service::where('name', '=', $name)
            ->where('port', '=', $port)
            ->serverIp($serverIp);

        $this->assertTrue($queryRetrieve->exists());
    }
}

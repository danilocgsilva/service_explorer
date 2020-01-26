<?php

namespace Tests\Feature\Repositories;

use App\Repositories\ServerRepository;
use App\Repositories\ServiceRepository;
use App\Service;
use App\Server;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var ServiceRepository
     */
    private $serviceRepository;

    /**
     * @var ServerRepository
     */
    private $serverRepository;

    public function setUp() : void
    {
        parent::setUp();
        $this->serviceRepository = new ServiceRepository();
        $this->serverRepository = new ServerRepository();
    }

    /**
     * If createService method trully records data in thedatabase
     *
     * @return void
     */
    public function testRecordService()
    {
        $name = 'LDAP';
        $serverIp = '192.168.2.3';
        $port = '3456';

        $this->serviceRepository->createService($name, $serverIp, $port);

        $queryRetrieve = Service::where('name', '=', $name)->where('port', '=', $port)->serverIp($serverIp);

        $this->assertTrue($queryRetrieve->exists());
    }

    /**
     * If at service creation the not existing server becomes created
     *
     * @return void
     */
    public function testNewServerCreatedAtNewServiceCreatiion() : void
    {
        $serverIp = '188.192.254.0';

        $queryFetchesServer = Server::where(['ip' => $serverIp]);

        if ($queryFetchesServer->exists()) {
            $queryFetchesServer->delete();
        }

        $this->serviceRepository->createService('FTP', $serverIp, 22);

        $this->assertTrue($queryFetchesServer->exists());
    }
}

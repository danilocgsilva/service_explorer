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

    /**
     * @return void
     */
    public function testCanGetServiceById() : void
    {
        $serviceName = 'Mail endpoint for mocks';
        $serverIp = '192.112.80.1';
        $port = 587;
        $justCreatedService = $this->serviceRepository->createService($serviceName, $serverIp, $port);

        $justCreatedServiceId = $justCreatedService->id;

        $fetchedFromDb = $this->serviceRepository->getServiceById($justCreatedServiceId);

        $this->assertSame($justCreatedService->id, $fetchedFromDb->id);
    }

    /**
     * @return void
     */
    public function testChange() : void
    {
        $oldName = 'LDAP Server for testing';
        $newName = 'LDAP production server';
        $serverIp = '192.167.77.2';
        $port = 1212;

        $justCreatedService = $this->serviceRepository->createService($oldName, $serverIp, $port);

        $this->serviceRepository->change($justCreatedService, 'name', $newName);

        $fetchedFromDb = $this->serviceRepository->getServiceById($justCreatedService->id);

        $this->assertSame($newName, $fetchedFromDb->name);
    }
}

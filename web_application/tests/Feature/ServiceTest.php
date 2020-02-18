<?php

namespace Tests\Feature;

use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /**
     * The service password, if recorded, must be encrypted when recorded in
     * the database. So, the raw record from database must be different from
     * the real password inteded to be recorded
     *
     * @return void
     */
    public function testServicePasswordIsDifferentFromPhysicalRecord()
    {
        $serviceRepository = new ServiceRepository();

        $name = 'LDAP';
        $serverIp = '192.168.2.3';
        $port = '3456';
        $password = 'engage';

        $justCreatedService = $serviceRepository->createService($name, $serverIp, $port, null, null, null, $password);

        $justCreatedServiceId = $justCreatedService->id;

        $serviceFetchedFromDb = $serviceRepository->getServiceById($justCreatedServiceId);

        $servicePasswordHash = $serviceFetchedFromDb->password_hash;

        $this->assertNotNull($servicePasswordHash);
        $this->assertNotEquals($servicePasswordHash, $serviceFetchedFromDb->getPassword());
    }
}

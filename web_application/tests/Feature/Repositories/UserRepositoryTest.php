<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Repositories\UserRepository;
use App\Repositories\RepositoryException;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    /**
     * @var UserReporitory
     */
    private $userRepository;

    public function setUp()
    {
        parent::setUp();
        $this->userRepository = new UserRepository();
    }

    public function testExceptionCreatingTwoUsersWithSameEmail()
    {
        $this->expectException(RepositoryException::class);

        $this->userRepository->createUser('user1mail@test.com', 'testPassword');
        $this->userRepository->createUser('user2mail@test.com', 'testPassword');
    }
}

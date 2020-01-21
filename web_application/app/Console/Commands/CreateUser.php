<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\UserRepository;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user allowing to make a login';

    /**
     * The repository service for the users creation
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');
        $createdUser = $this->userRepository->createUser($email, $password);
    }
}

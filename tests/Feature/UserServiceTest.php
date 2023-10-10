<?php

namespace Tests\Feature;

use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp():void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testLoginSucces(){
        self::assertTrue($this->userService->login("al", "rahasia"));
    }
    public function testLoginUserNotFound(){
        self::assertTrue($this->userService->login("bukhari", "rahasia"));
    }
    public function testLoginWrongPassword(){
        self::assertTrue($this->userService->login("al", "raha"));
    }
}

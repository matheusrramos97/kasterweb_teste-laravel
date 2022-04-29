<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;


class UserTest extends TestCase
{
    
    private $user;

    protected function setUp(): void{
        parent::setUp();

        $user = new User();
        $user->name = "Usuário 1";
        $user->email = "usuario@usuario.com";
        $user->password = "usuario123";

        $this->user = $user;
    }


    public function test_criar_user()
    {
        // $this->assertTrue(true);
        $this->assertEquals("Usuário 1", $this->user->name);
        $this->assertEquals("usuario@usuario.com", $this->user->email);
        $this->assertEquals("usuario123", $this->user->password);
        $this->assertInstanceOf(User::class, $this->user);
    }
}

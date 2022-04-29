<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Cliente;

class ClienteTest extends TestCase
{
    private $cliente;

    protected function setUp(): void{
        parent::setUp();

        $cliente = new Cliente();
        $cliente->name = "Cliente 1";
        $cliente->email = "ciente1@cliente.com";

        $this->cliente = $cliente;
    }

    public function teste_criar_cliente()
    {
        $this->assertEquals("Cliente 1", $this->cliente->name);
        $this->assertEquals("ciente1@cliente.com", $this->cliente->email);
        $this->assertInstanceOf(Cliente::class, $this->cliente);
    }
}

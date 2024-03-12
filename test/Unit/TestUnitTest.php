<?php

namespace Test\Unit;
use Core\Teste;
use PHPUnit\Framework\TestCase;

class TestUnitTest extends TestCase
{
    public function test_call_method_index()
    {
        $teste = new Teste();
        $response = $teste->index();
        
        $this->assertEquals("testando", $response);
    }
}

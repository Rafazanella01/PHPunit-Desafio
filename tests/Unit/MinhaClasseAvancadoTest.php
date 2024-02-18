<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\MinhaClasseAvancado;
use InvalidArgumentException;

class MinhaClasseAvancadoTest extends TestCase
{

    public function testSomaIvalidos()
    {
        $this->expectException(InvalidArgumentException::class);
        $classe = new MinhaClasseAvancado();
        $classe->soma("rafa", 5);
    }

    public function testSomaDecimais()
    {
        $classe = new MinhaClasseAvancado();
        $this->assertEquals(3, $classe->soma(1.5, 1.5));
    }

    public function testSomaZero()
    {
        $classe = new MinhaClasseAvancado();
        $this->assertEquals(1.5, $classe->soma(1.5, 0));
    }

    public function testSubtrairInvalidos()
    {
        $this->expectException(InvalidArgumentException::class);
        $classe = new MinhaClasseAvancado();
        $classe->subtracao("rafa", 5);
    }

    public function testSubtrairDecimais()
    {
        $classe = new MinhaClasseAvancado();
        $this->assertEquals(0, $classe->subtracao(1.5, 1.5));
    }

    public function testSubtrairZero()
    {
        $classe = new MinhaClasseAvancado();
        $this->assertEquals(1.5, $classe->subtracao(1.5, 0));
    }
}

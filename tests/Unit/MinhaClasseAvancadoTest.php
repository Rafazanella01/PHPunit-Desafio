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

    }

    public function testSomaZero()
    {

    }

    public function testSubtrair()
    {

    }
}

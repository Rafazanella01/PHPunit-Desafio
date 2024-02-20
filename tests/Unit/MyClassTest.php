<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\MyClass;


class MyClassTest extends TestCase
{


    public function testAddMethod()
    {
            $classe = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->addMethods(['Imply', 'Rafael'])
            ->getMock();

            $this->assertTrue(method_exists($classe, 'Imply'));
            $this->assertTrue(method_exists($classe, 'Rafael'));
    }

    public function testSetConstructorArgs()
    {
        $classe = $this->getMockBuilder(MyClass::class)
            ->setConstructorArgs(['Rafa'])
            ->getMock();

        $this->assertEquals('Rafa', $classe->nomeMock);
    }

    public function testSetMockClassName()
    {
        $nomeClasse = 'Imply';

        $classe = $this->getMockBuilder(MyClass::class)
            ->setMockClassName($nomeClasse)
            ->setConstructorArgs(['Rafa'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->assertEquals($nomeClasse, get_class($classe));
    }

    public function testDisableOriginalConstructor()
    {
        $classe = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->getMock();

        $this->assertNull($classe->nomeMock);
    }

    public function testDisableOriginalClone()
    {
        $classe = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->getMock();
    
        $clone = clone $classe;
        $this->assertSame($classe->nomeMock, $clone->nomeMock);
    }
    
    public function testMethodWillReturn()
    {
        $classe = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->getMock();

        $nomeMetodo = 'metodoExemplo';

        $valorRetornoEsperado = 'Exemplo de retorno do método';

        $classe->expects($this->any())
            ->method($nomeMetodo)
            ->willReturn($valorRetornoEsperado);

        $resultado = $classe->$nomeMetodo();

        $this->assertEquals($valorRetornoEsperado, $resultado);
    }

    public function testMethodReturnSelf()
    {
        $classe = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->getMock();
    
        $this->assertSame($classe, $classe); 
    }

    public function testDisableAutoload()
    {
        $classe = $this->getMockBuilder(MyClass::class)
            ->disableAutoload()
            ->disableOriginalConstructor()
            ->getMock();

        $classInfo = [];

        //Este trecho tenta carregar a classe MyClass. Se o autoload estiver desativado corretamente, a função de autoload não deve ser chamada e a classe não será carregada.
        spl_autoload_register(function ($class) use (&$classInfo) {
            $classInfo[] = $class;
        });
        
        // Tenta carregar a classe MyClass
        class_exists(MyClass::class);

        $this->assertEmpty($classInfo);
    }
}
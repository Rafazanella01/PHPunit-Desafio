<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\ListaNumerica;

class ListaNumericaTest extends TestCase
{
    // Testes do metodo somarElementos()
    public function testSomaListaVazia()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(0, $listaNumerica->somarElementos([]));
    }

    public function testSomaPositivos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(6, $listaNumerica->somarElementos([1,2,3]));
    }

    public function testSomaNegativos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(-6, $listaNumerica->somarElementos([-1,-2,-3]));
    }

    public function testSomaMistos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(0, $listaNumerica->somarElementos([1,2,-3, 0]));
    }

    //Testes do metodo encontrarMaiorElemento()
    public function testEncontrarMaiorListaVazia()
    {
        $listaNumerica = new ListaNumerica();
        $listaVazia = [];
        $this->assertEquals($listaVazia, $listaNumerica->encontrarMaiorElemento([$listaVazia]));
    }

    public function testEncontrarMaiorListaUnicoElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(16, $listaNumerica->encontrarMaiorElemento([16]));
    }

    public function testEncontrarMaiorListaPositivos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(10, $listaNumerica->encontrarMaiorElemento([8,9,10]));
    }

    public function testEncontrarMaiorListaNegativos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(-8, $listaNumerica->encontrarMaiorElemento([-8,-9,-10]));
    }

    public function testEncontrarMaiorListaMistos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(9, $listaNumerica->encontrarMaiorElemento([-8,9,-10,0]));
    }

    // Testes do metodo encontrarMenorElemento()
    public function testEncontrarMenorListaVazia()
    {
        $listaNumerica = new ListaNumerica();
        $listaVazia = [];
        $this->assertEquals($listaVazia, $listaNumerica->encontrarMenorElemento([$listaVazia]));
    }

    public function testEncontrarMenorListaUnicoElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(1, $listaNumerica->encontrarMenorElemento([1]));
    }

    public function testEncontrarMenorListaPositivos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(8, $listaNumerica->encontrarMenorElemento([8,9,10]));
    }

    public function testEncontrarMenorListaNegativos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(-10, $listaNumerica->encontrarMenorElemento([-8,-9,-10]));
    }

    public function testEncontrarMenorListaMistos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(-10, $listaNumerica->encontrarMenorElemento([-8,9,-10,0]));
    }

    // Testes do metodo ordenarLista()
    public function testOrdenarListaVazia()
    {
        $listaNumerica = new ListaNumerica();
        $listaVazia = [];
        $ordenado = $listaNumerica->ordenarLista($listaVazia);
        $this->assertEquals($listaVazia, $ordenado);
    }

    public function testOrdenarListaUnicoElemento()
    {
        $listaNumerica = new ListaNumerica();
        $esperado = [1];
        $this->assertEquals($esperado, $listaNumerica->ordenarLista([1]));
    }

    public function testOrdenarListaPositivos()
    {
        $listaNumerica = new ListaNumerica();
        $lista = [8,9,10];
        $ordenada = $listaNumerica->ordenarLista([10,9,8]);
        $this->assertEquals($lista, $ordenada);
    }

    public function testOrdenarListaNegativos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([-10,-9,-8], $listaNumerica->ordenarLista([-8,-9,-10]));
    }

    public function testOrdenarListaMistos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([-10,-8,0,9], $listaNumerica->ordenarLista([-8,9,-10,0]));
    }

    // Testes do metodo filtrarNumerosPares()
    public function testFiltrarListaVazia()
    {
        $listaNumerica = new ListaNumerica();
        $listaVazia = [];
        $ordenado = $listaNumerica->filtrarPares($listaVazia);
        $this->assertEquals($listaVazia, $ordenado);
    }

    public function testPares()
    {
        $listaNumerica = new ListaNumerica();
        $listaPares = [2,4,8,16];
        $this->assertEquals($listaPares, $listaNumerica->filtrarPares([2,4,8,16]));
    }

    public function testNumerosImpares()
    {
        $listaNumerica = new ListaNumerica();
        $listaPares = [3,5,9,17];
        $this->assertEquals([], $listaNumerica->filtrarPares([3,5,9,17]));
    }

    public function testNumerosMistos()
    {
        $listaNumerica = new ListaNumerica();
        $lista = [0,2,-4,8,9,11,13,16];
        $this->assertEquals([0,2,-4,8,16], $listaNumerica->filtrarPares($lista));
    }
}

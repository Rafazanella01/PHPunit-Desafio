<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\ListaNumerica;

class ListaNumericaTest extends TestCase
{
    // Testes do metodo somarElementos()
    public function testSomaListaVazia()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(0, $lista->somarElementos([]));
    }

    public function testSomaPositivos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(6, $lista->somarElementos([1,2,3]));
    }

    public function testSomaNegativos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(-6, $lista->somarElementos([-1,-2,-3]));
    }

    public function testSomaMistos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(0, $lista->somarElementos([1,2,-3, 0]));
    }

    //Testes do metodo encontrarMaiorElemento()
    public function testEncontrarMaiorListaVazia()
    {
        $lista = new ListaNumerica();
        $listaVazia = [];
        $this->assertEquals($listaVazia, $lista->encontrarMaiorElemento([$listaVazia]));
    }

    public function testEncontrarMaiorListaUnicoElemento()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(16, $lista->encontrarMaiorElemento([16]));
    }

    public function testEncontrarMaiorListaPositivos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(10, $lista->encontrarMaiorElemento([8,9,10]));
    }

    public function testEncontrarMaiorListaNegativos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(-8, $lista->encontrarMaiorElemento([-8,-9,-10]));
    }

    public function testEncontrarMaiorListaMistos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(9, $lista->encontrarMaiorElemento([-8,9,-10,0]));
    }

    // Testes do metodo encontrarMenorElemento()
    public function testEncontrarMenorListaVazia()
    {
        $lista = new ListaNumerica();
        $listaVazia = [];
        $this->assertEquals($listaVazia, $lista->encontrarMenorElemento([$listaVazia]));
    }

    public function testEncontrarMenorListaUnicoElemento()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(1, $lista->encontrarMenorElemento([1]));
    }

    public function testEncontrarMenorListaPositivos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(8, $lista->encontrarMenorElemento([8,9,10]));
    }

    public function testEncontrarMenorListaNegativos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(-10, $lista->encontrarMenorElemento([-8,-9,-10]));
    }

    public function testEncontrarMenorListaMistos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals(-10, $lista->encontrarMenorElemento([-8,9,-10,0]));
    }

    // Testes do metodo ordenarLista()
    public function testOrdenarListaVazia()
    {
        $lista = new ListaNumerica();
        $listaVazia = [];
        $ordenado = $lista->ordenarLista($listaVazia);
        $this->assertEquals($listaVazia, $ordenado);
    }

    public function testOrdenarListaUnicoElemento()
    {
        $lista = new ListaNumerica();
        $esperado = [1];
        $this->assertEquals($esperado, $lista->ordenarLista([1]));
    }

    public function testOrdenarListaPositivos()
    {
        $lista = new ListaNumerica();
        $listaEsperada = [8,9,10];
        $ordenada = $lista->ordenarLista([10,9,8]);
        $this->assertEquals($listaEsperada, $ordenada);
    }

    public function testOrdenarListaNegativos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals([-10,-9,-8], $lista->ordenarLista([-8,-9,-10]));
    }

    public function testOrdenarListaMistos()
    {
        $lista = new ListaNumerica();
        $this->assertEquals([-10,-8,0,9], $lista->ordenarLista([-8,9,-10,0]));
    }

    // Testes do metodo filtrarNumerosPares()
    public function testFiltrarListaVazia()
    {
        $lista = new ListaNumerica();
        $listaVazia = [];
        $ordenado = $lista->filtrarPares($listaVazia);
        $this->assertEquals($listaVazia, $ordenado);
    }

    public function testPares()
    {
        $lista = new ListaNumerica();
        $listaPares = [2,4,8,16];
        $this->assertEquals($listaPares, $lista->filtrarPares([2,4,8,16]));
    }

    public function testNumerosImpares()
    {
        $lista = new ListaNumerica();
        $listaPares = [3,5,9,17];
        $this->assertEquals([], $lista->filtrarPares([3,5,9,17]));
    }

    public function testNumerosMistos()
    {
        $lista = new ListaNumerica();
        $listaMista= [0,2,-4,8,9,11,13,16];
        $this->assertEquals([0,2,-4,8,16], $lista->filtrarPares($listaMista));
    }
}
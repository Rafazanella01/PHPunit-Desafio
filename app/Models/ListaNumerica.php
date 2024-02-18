<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaNumerica extends Model
{
    use HasFactory;

    public function somarElementos(array $lista)
    {
        $soma = 0;

        foreach($lista as $numero){
            $soma += $numero;
        }

        return $soma;
    }

    public function encontrarMaiorElemento(array $lista)
    {
        $maiorElemento = max($lista);

        return $maiorElemento;
    }

    public function encontrarMenorElemento(array $lista)
    {
        $menorElemento = min($lista);

        return $menorElemento;
    }

    public function ordenarLista(array $lista)
    {
       sort($lista);

       return $lista;
    }

    public function filtrarPares(array $lista)
    {
        $pares = array();

        foreach($lista as $numero){
            if($numero % 2 == 0){
                $pares[] = $numero;
            }
        }
        return $pares;
    }
}

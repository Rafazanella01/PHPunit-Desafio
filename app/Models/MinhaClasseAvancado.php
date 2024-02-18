<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class MinhaClasseAvancado extends Model
{
    use HasFactory;

    public function soma($a, $b)
    {
        if (!is_numeric($a)||!is_numeric($b)){
            throw new InvalidArgumentException("Para somar você precisa ser um número");
        }

        return $a + $b;
    }
    
    public function subtracao($a, $b)
    {
        if (!is_numeric($a)||!is_numeric($b)){
            throw new InvalidArgumentException("Para subtrair você precisa ser um número");
        }

        return $a - $b;
    }
    
}

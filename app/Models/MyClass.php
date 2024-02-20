<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    public ?string $nomeMock = null;

    public function __construct(?string $nomeMock = null)
    {
       $this->nomeMock = $nomeMock;
    }

    public function __clone()
    {
        $this->nomeMock; 
    }

    public function metodoExemplo()
    {
        return "Exemplo de retorno do método";
    }
}

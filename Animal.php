<?php

class Animal
{
    public $nome;
    public $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function comer()
    {
        echo "{$this->nome} está comendo.\n";
    }

    public function dormir()
    {
        echo "{$this->nome} está dormindo.\n";
    }
}
class Cachorro extends Animal
{
public function latir()
{
    echo "{$this->nome} está latindo.\n";
}
}
class Gato extends Animal
{
    public function miar()
    {
        echo "{$this->nome} está miando.\n";
    }
}

$bombom = new Cachorro('Bombom' , 4);
$bombom->comer();
$bombom->dormir();
$bombom->latir();

$nefe = new Gato('Neferupitou' , 2);
$nefe->miar();
$nefe->dormir();
$nefe->comer();

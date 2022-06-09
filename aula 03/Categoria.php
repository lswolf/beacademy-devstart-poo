<?php
declare(strict_types=1);
class Categoria {
    public function __construct(
    private string $nome,
    private string $description
    ){}

    public function  setNome(string $nome): void{
        $this->nome = $nome;
    }
    public function  setDescription(string $description): void{
        $this->description = $description;
    }
    public function  getNome() : string {
        return $this->nome;
    }
    public function  getDescription() : string {
        return $this->description;
    }
}
<?php
declare(strict_types=1);

class Produto {
    private string $nome;
    private float $preco;
    private string $description;
    private readonly Categoria $categoria;

public function __construct(string $nome,float $preco, Categoria $categoria) {
    if ($preco<=0){
        die('valor negativo');
    }else{
        $this->preco = $preco;
        $this->nome = $nome;
        $this->categoria = $categoria;
    }

}

    public function  setNome(string $nome): void{
        $this->nome = $nome;
    }
    public function  setDescription(string $description): void{
        $this->description = $description;
    }
    public function  setPreco(float $preco) : void{
        if ($preco<=0){
            die('valor negativo');
        }else{
            $this->preco = $preco;
        }
    }
    public function  getPreco() : float {
        return $this->preco;
    }
    public function  getNome() : string {
        return $this->nome;
    }
    public function  getDescription() : string {
        return $this->description;
    }
    public function  getCategoria() : string {
        return $this->description;
    }
}
<?php
declare(strict_types=1);
class Produto {
    private string $nome;
    private float $preco;

    public function  setNome(string $nome): void{
        $this->nome = $nome;
    }
    public function  setPreco(float $preco) : void{
        if ($preco<= 0){
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
}
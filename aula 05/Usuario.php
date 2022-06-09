<?php
declare(strict_types=1);
abstract class Usuario
{
    public function __construct(
    private string $nome,
    private string $email,
    private string $senha,
    private string $cpf
    ){

    }
   
	function getNome(): string {
		return $this->nome;
	}
	

	function setNome(string $nome): self {
		$this->nome = $nome;
		return $this;
	}

	function getEmail(): string {
		return $this->email;
	}
	
	
	function setEmail(string $email): self {
		$this->email = $email;
		return $this;
	}
	
	function getSenha(): string {
		return $this->senha;
	}
	
	
	function setSenha(string $senha): self {
		$this->senha = $senha;
		return $this;
	}

	function getCpf(): string {
		return $this->cpf;
	}
	
	
	function setCpf(string $cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
}
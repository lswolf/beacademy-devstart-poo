<?php
declare(strict_types=1);
class Gestor extends Usuario
{

    private string $horaTrabalho;
    private float $salario;
    
    public function __construct(
         string $nome,
         string $email,
         string $senha,
         string $cpf,
         float $salario
        ){
            parent::__construct($nome,$email,$senha,$cpf);
            $this->salario = $salario;
        }
  
	
	function getSalario(): float {
		return $this->salario;
	}
	
	
	function setSalario(float $salario): self {
		$this->salario = $salario;
		return $this;
	}
	
	function getHoraTrabalho(): string {
		return $this->horaTrabalho;
	}
	
	
	function setHoraTrabalho(string $horaTrabalho): self {
		$this->horaTrabalho = $horaTrabalho;
		return $this;
	}
}
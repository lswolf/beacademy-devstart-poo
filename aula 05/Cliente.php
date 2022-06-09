<?php
declare(strict_types=1);
final class Cliente extends Usuario
{
    private string $dataCadastro;
    public function __construct(
        string $nome,
        string $email,
        string $senha,
        string $cpf,
        string $dataCadastro
       ){
           parent::__construct($nome,$email,$senha,$cpf);
           $this->dataCadastro = $dataCadastro;
       }
    
    


	
	function getDataCadastro(): string {
		return $this->dataCadastro;
	}
	

	function setDataCadastro(string $dataCadastro): self {
		$this->dataCadastro = $dataCadastro;
		return $this;
	}
}
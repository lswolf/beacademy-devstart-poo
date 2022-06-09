<?php
declare(strict_types=1);
class GestorGeral extends Gestor
{
private float $bonusAnual;

public function __construct(
    string $nome,
    string $email,
    string $senha,
    string $cpf,
    float $salario,
    float $bonusAnual
   ){
       parent::__construct($nome,$email,$senha,$cpf,$salario);
       $this->bonusAnual = $bonusAnual;
   }



	/**
	 * @return float
	 */
	function getBonusAnual(): float {
		return $this->bonusAnual;
	}
	
	/**
	 * @param float $bonusAnual 
	 * @return GestorGeral
	 */
	function setBonusAnual(float $bonusAnual): self {
		$this->bonusAnual = $bonusAnual;
		return $this;
	}
}
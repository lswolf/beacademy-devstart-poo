<?php
declare(strict_types=1);
class ValidarBR implements Validar
{
    public function validarNome(string $nome):void{
        if(strlen($nome) < 3){
            die('nome  invalido');
         }
    }
    public function validarDocumento(string $documento):void{
        if(strlen($documento) !== 11){
            die( 'cpf invalido' );
         }
    }
    public function validarCodigoPostal(string $codigoPostal):void{
        if(strlen($codigoPostal) !== 8){
            die('codigo invalido');
         }
    }
}
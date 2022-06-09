<?php
declare(strict_types=1);
class ValidarUSA implements Validar
{
    public function validarNome(string $nome):void{
        if(strlen($nome) < 2){
            die('invalid name');
         }
    }
    public function validarDocumento(string $documento):void{
        if(strlen($documento !== 14){
            die('invalid Social security number');
         }
    }
    public function validarCodigoPostal(string $codigoPostal):void{
        if(strlen($codigoPostal) !== 5){
            die('invalid zip code');
         }
    }
}
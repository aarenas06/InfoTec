<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/includes/conexion.php';

class modelo
{
    public $CNX1;

    public function __construct()
    {
        $this->CNX1 = conexion::mysql();
    }
    public function ListPais()
    {
        $sql = "SELECT tb1.idPais,tb1.PaisNombre ,tb1.PaisFoto ,COUNT(tb2.idCiudad) Conteo FROM pais tb1 
LEFT JOIN ciudad tb2 on tb2.Pais_idPais=tb1.idPais
GROUP BY tb1.idPais,tb1.PaisNombre ,tb1.PaisFoto";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetchAll(PDO::FETCH_NAMED);
        return $row;
    }
    public function ListCiudad($idPais)
    {
        $sql = "SELECT idCiudad,CiuNombre FROM `ciudad` where  Pais_idPais=$idPais";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetchAll(PDO::FETCH_NAMED);
        return $row;
    }
    public function GetInfoCiudad($idCiudad)
    {
        $sql = "SELECT idCiudad,CiuNombre,CiuFoto,CiudDes FROM `ciudad` where  idCiudad =$idCiudad";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
    public function InfoDetalle($idCiudad)
    {
        $sql = "SELECT tb1.idCiudad,tb1.CiuNombre,tb1.CiuCoord,tb1.CiuFoto,tb2.* 
        FROM ciudad tb1 
        INNER JOIN pais tb2 on tb2.idPais=tb1.Pais_idPais 
        WHERE idCiudad=$idCiudad";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
}

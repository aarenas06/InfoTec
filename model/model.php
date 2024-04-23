<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/AgenciaInfo/includes/conexion.php';

class modelo
{
    public $CNX1;

    public function __construct()
    {
        $this->CNX1 = conexion::mysql();
    }
    public function ListPais()
    {
        $sql = "SELECT * FROM `pais`";
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
        $sql = "";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
}

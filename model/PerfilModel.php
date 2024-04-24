<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/includes/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/model/RegBdModel.php';
class modelo
{
    public $CNX1;
    public $BD;
    public function __construct()
    {
        $this->CNX1 = conexion::mysql();
        $this->BD = new BD();
    }
    public function InfoUser($User)
    {
        $sql1 = "SELECT tb1.*,tb2.RolNombre Rol FROM usuarios tb1 INNER JOIN roles tb2 on tb2.idRoles=tb1.Roles_idRoles where idUsuarios=$User";
        $sql = $this->CNX1->prepare($sql1);
        $sql->execute();
        $this->BD->inserRegistro($sql1);
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
}

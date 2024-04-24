<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/includes/conexion.php';

class modelo
{
    public $CNX1;

    public function __construct()
    {
        $this->CNX1 = conexion::mysql();
    }
    public function ValidateUser($User)
    {
        $sql = "SELECT idUsuarios FROM usuarios where UsuUser='$User'";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
    public function InsertUser($data)
    {
        try {

            $columnas = implode(", ", array_keys($data));
            $valores = array_values($data);
            $placeholders = implode(", ", array_fill(0, count($valores), "?"));
            $sql = "INSERT INTO usuarios ($columnas) VALUES ($placeholders)";
            $stmt = $this->CNX1->prepare($sql);
            $stmt->execute($valores);
            return 1;
        } catch (PDOException $e) {
            die("Error al insertar los datos: " . $e->getMessage());
            return 0;
        }
    }
    public function GetProfile($User, $Pass)
    {
        $sql = "SELECT idUsuarios ,Roles_idRoles,UsuNombres,UsuApellidos,UsuUser FROM usuarios where UsuUser='$User' AND UsuPass='$Pass'";
        $sql = $this->CNX1->prepare($sql);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_NAMED);
        return $row;
    }
}

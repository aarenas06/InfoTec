<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/includes/conexion.php';

class BD
{
    public $CNX1;

    public function __construct()
    {
        $this->CNX1 = conexion::mysql();
    }

    public function inserRegistro($Query)
    {
        if (!isset($_SESSION["idUsuarios"])) {
            $UserSession = 0;
        } else {
            $UserSession = $_SESSION["idUsuarios"];
        }
        ///validar cantidad
        $sql1 = "select idSeguimiento_Bd num from seguimiento_bd order by idSeguimiento_Bd ASC;";
        $sql = $this->CNX1->prepare($sql1);
        $sql->execute();
        $row = $sql->fetchAll(PDO::FETCH_ASSOC);

        if (count($row) == 5) {
            ///validar cantidad
            $sql2 = "DELETE FROM seguimiento_bd WHERE idSeguimiento_Bd = :num";
            $sqlDelete = $this->CNX1->prepare($sql2);
            $sqlDelete->bindValue(':num', $row[0]['num'], PDO::PARAM_INT);
            $sqlDelete->execute();
        }

        $fechaHoy = date('Y-m-d H:i');
        if (is_string($Query)) {
            $sql = "INSERT INTO seguimiento_bd (Usuarios_idUsuarios, SegSentencia,SegFechaEje)
            VALUES (:UserSession, :Query, :fechaHoy)";
            $stmt = $this->CNX1->prepare($sql);
            $stmt->bindParam(':UserSession', $UserSession);
            $stmt->bindParam(':Query', $Query);
            $stmt->bindParam(':fechaHoy', $fechaHoy);
            $stmt->execute();
        }
    }
}

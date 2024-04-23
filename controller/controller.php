<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/AgenciaInfo/model/model.php';


class Controller
{
    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new modelo();
    }
    // Generales
    public function ListPais()
    {
        $data = $this->MODEL->ListPais();
        return $data;
    }
    public function SelectCiu()
    {
        $idPais = $_POST['Pais'];
        $data = $this->MODEL->ListCiudad($idPais);
        echo json_encode($data);
    }
    public function GetInfo()
    {

        $idCiudad = $_POST['Ciudad'];
        $data = $this->MODEL->GetInfoCiudad($idCiudad);

        if ($data) {
            include $_SERVER['DOCUMENT_ROOT'] . '/AgenciaInfo/layouts/pantalla2.php';
        }
    }
    public function InfoDetalle()
    {
        $idCiudad = $_POST['Ciudad'];
        $data = $this->MODEL->InfoDetalle($idCiudad);
    }
}
// Crear instancia del controlnor
$controller = new Controller();

if (isset($_POST['funcion'])) {
    call_user_func(array(new Controller, $_POST['funcion']));
}

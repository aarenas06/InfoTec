<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/model/PerfilModel.php';


class PerfilController
{
    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new modelo();
    }
    // Generales
    public function InfoUser($user)
    {
        $data = $this->MODEL->InfoUser($user);
        return $data;
    }
}
// Crear instancia del controlnor
$controller = new PerfilController();

if (isset($_POST['funcion'])) {
    call_user_func(array(new PerfilController, $_POST['funcion']));
}

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Agencia/model/InicioModel.php';


class InicioController
{
    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new modelo();
    }
    public function NewRegistro()
    {
        $user = $_POST['Usuario'];
        $validate = $this->MODEL->ValidateUser($user);
        if ($validate) {
            $responde = array(
                "cod" => 0,
                "Mensaje" => 'Usuario Ya existe, intenta con otro.',
            );
            echo json_encode($responde);
        } else {
            $data = array(
                "UsuNombres" => $_POST['Nombres'],
                "UsuApellidos" => $_POST['Apellidos'],
                "UsuSexo" => $_POST['Sexo'],
                "UsuUser" => $_POST['Usuario'],
                "UsuPass" => md5($_POST['Contrasena']),
                "UsuTelefono" => $_POST['Telefono'],
                "Roles_idRoles " => 2,
            );
            $insert = $this->MODEL->InsertUser($data);
            $responde = array(
                "cod" => $insert,
                "Mensaje" => 'Usuario Registrado Exitosamente',
            );
            echo json_encode($responde);
        }
    }
    public function iniciarSesion()
    {
        $User = $_POST['User'];
        $Pass = md5($_POST['Pass']);

        $validateUser = $this->MODEL->GetProfile($User, $Pass);
        if ($validateUser) {
            session_start();
            // Almacenar datos en la sesión
            $_SESSION['idUsuarios'] = $validateUser['idUsuarios'];
            $_SESSION['Roles_idRoles'] = $validateUser['Roles_idRoles'];
            $_SESSION['UsuNombres'] = $validateUser['UsuNombres'];
            $_SESSION['UsuApellidos'] = $validateUser['UsuApellidos'];
            $_SESSION['UsuUser'] = $validateUser['UsuUser'];

            $LastSession = $this->MODEL->LastSession($validateUser['idUsuarios']);
            $responde = array(
                "cod" => 1,
                "Mensaje" => 'Creedenciales Validas',
                "User" => $validateUser['UsuNombres'],
            );
        } else {
            $responde = array(
                "cod" => 0,
                "Mensaje" => 'Creedenciales Invalidas',
            );
        }
        echo json_encode($responde);
    }
}
// Crear instancia del controlnor
$controller = new InicioController();

if (isset($_POST['funcion'])) {
    call_user_func(array(new InicioController, $_POST['funcion']));
}

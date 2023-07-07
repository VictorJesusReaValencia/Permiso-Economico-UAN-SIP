<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    public function login()
    {
        //$val = $this->request->getVar('val');
        $nombre_usuario = $this->request->getVar('nombre_usuario');
        $contrasena = $this->request->getVar('contrasena');
        //$nombre_usuario = $this->request->getPost('nombre_usuario');
        //$contrasena = $this->request->getPost('contrasena');

        // Obtener datos
        $Usuario = new LoginModel();
        $datosUsuario = $Usuario->obtenerUsuario(['nombre_usuario' => $nombre_usuario]);

        // Convertir contraseña a cadena
        $contrasenaString = json_encode($contrasena);
        $contrasenaString = substr($contrasenaString, 1, -1);

        if (count($datosUsuario) > 0 && password_verify($contrasenaString, $datosUsuario[0]['contrasena'])) {
            $data = [
                "nombre_usuario" => $datosUsuario[0]['nombre_usuario'],
                "rol" => $datosUsuario[0]['rol'],

            ];
            $session = session();
            $session->set($data); // agregamos los datos del usuario obtenido

            return redirect()->to(base_url('InicioController/inicio'))->with('mensaje', '1');

        } else {
            session()->setFlashdata('Error', 'No se encuentra usuario.');
            session()->markAsFlashdata('Error', 'No se encuentra usuario.');
            return redirect()->to(base_url('LoginController/'))->with('Error', 'No se encuentra el usuario(1)');
        }
    }
}

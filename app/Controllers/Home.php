<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
	public function index()
	{
		$mensaje = session('mensaje');
		return view('login', ["mensaje" => $mensaje]);
	}

	public function inicio()
	{
		return view('inicio');
	}

	public function login()
	{

		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		// Pasar password a cadena
		// Convertir contraseña a cadena
		$contrasenaString = json_encode($password);
		$contrasenaString = substr($contrasenaString, 1, -1);

		if (count($datosUsuario) > 0 && password_verify($contrasenaString, $datosUsuario[0]['contrasena'])) {
			$data = [
				"nombre_usuario" => $datosUsuario[0]['nombre_usuario'],
				"rol" => $datosUsuario[0]['rol'],

			];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/inicio'))->with('mensaje', '1');
		} else {
			return redirect()->to(base_url('/'))->with('mensaje', '0');
		}
	}

	public function salir()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
	//--------------------------------------------------------------------

}

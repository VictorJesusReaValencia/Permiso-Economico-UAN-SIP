<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InicioController extends BaseController
{
    public function inicio()
    {
        //https://sip.uan.mx/victor/PermisoEconomico/public/?/inicio
        return view('inicio');
    }
}

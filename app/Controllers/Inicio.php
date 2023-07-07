<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        $data['baseurl'] = base_url();
        return view('Inicio/index_view',$data);
    }
}
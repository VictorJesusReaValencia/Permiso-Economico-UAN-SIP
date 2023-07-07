<?php
namespace App\Controllers;

use App\Libraries\Utils;

class Autorut extends BaseController
{
    public function index($id=null,$otro=null)
    {
        helper(['form']);
        if($this->request->getVar('val')!=null){
            $val = $this->request->getVar('val');
        }else{
            $val = "nanchis";
        }
        $utils = new Utils;


        $data['params'] = base_url().";valores - id:".$id.";otro:".$otro.";valor:".$val.";Utils:".$utils->getIP();
        return view('autoruta_view',$data);
    }
}

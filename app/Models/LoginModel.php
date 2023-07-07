<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {
    public function obtenerUsuario($data){
        $Usuario = $this->db->table('Usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
    /*protected $table = 'Usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre_usuario', 'contrasena', 'rol', 'fecha_registro'];*/
}

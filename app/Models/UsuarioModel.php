<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios'; // El nombre de la tabla en tu base de datos
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario', 'password','nombre','apellido','rol'];

    // Método para obtener un usuario por nombre de usuario
    public function getUsuario($usuarioEnviado){
        return $this->where('usuario',$usuarioEnviado)->first();
    }
}

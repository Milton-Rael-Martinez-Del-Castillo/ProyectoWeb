<?php namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'edad', 'direccion', 'telefono'];
    protected $returnType = 'object'; // Cambia a 'array' si prefieres trabajar con arrays
}

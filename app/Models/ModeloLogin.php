<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloLogin extends Model{

    protected $table      = 'tblusuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'clave','id','rol', 'nombre']; 

}
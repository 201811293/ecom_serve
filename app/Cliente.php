<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $table = 'persona';
    // protected $primarykey= 'id_cliente'; "" o ''
    
   
    protected $fillable = ['id','nombre', 'apellido_mat', 'apellido_pat', 'di', 'usuario', 'contraseña', 'sexo', 'correo', 'direccion', 'estado_civil', 'sexo'];
}

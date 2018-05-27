<?php

namespace SisBezaFest;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
     //referencia a la tabla articulo//
     protected $table='evento';
     //su llave primaria //
     protected $primaryKey='id';
     //para agregar dos columnas de creación y de actualización//
     public $timestamps=false;
     //campos que reciben un valor para despues ser almacenados//
     protected $fillable=[
         'nombre',
         'echa-creacion',
         'fecha',
         'hora',
         'direccion',
         'aforo',
         'tipo_evento',
         'descripcion',
         'imagen',
         'Estado_id',
         'empresa_id'


     ];
     //campos que no queremos que se asigne al modelo//
     protected $guarded = [
 
     ];
}

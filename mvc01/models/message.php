<?php

class Message extends Model{
  public function save($data, $id=null){
      if(!isset($data['nombre']) || !isset($data['correo']) || !isset($data['mensaje']) ){
          return false;
      }
      //Saneamos los valores enviados por el usuario
      $id=(int)$id;
      $nombre=$this->db->escape($data['nombre']);
      $correo=$this->db->escape($data['correo']);
      $mensaje=$this->db->escape($data['mensaje']);
      
      if(!$id){ //Si no se envía un ID, se crea un nuevo registro
          $sql="insert into mensaje
                set nombre ='{$nombre}',
                 correo ='{$correo}',
                 mensaje ='{$mensaje}' ";
      } else {//Actualizar registro a partir del ID
          $sql="update mensaje
                set nombre ='{$nombre}',
                 correo ='{$correo}',
                 mensaje ='{$mensaje}'
                where id={$id}";          
      }
      //Ejecutamos la cosulta y regresamos el estatus de la misma      
      return $this->db->query($sql);      
  }   
}



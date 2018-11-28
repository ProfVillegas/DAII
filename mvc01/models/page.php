<?php

class Page extends Model{
    
    //Regresa todos los registros de la tabla paginas
    public function getList($publicados=false){
        $sql="select * from paginas where 1";
        //Si la bandera es_publicado es true, entonces debe regresar solo los que estan activados para publicar
        if($publicados){
            $sql.=" and es_publicado=1";
        }
        return $this->db->query($sql);
    }
    //Regresa un solo resultado para utilizar en una página simple
    public function getByAlias($alias){
        //Saneamos la cadena alias para bloquear la inyección de código malicioso
        $alias = $this->db->escape($alias);
        
        //Armamos la consulta y pasamos a alias como un parametro.
        $sql = "select * from paginas where alias ='{$alias}' limit 1";
        
        //Ejecutamos la consulta y lo almacenamos en la variable resultado
        $resultado = $this->db->query($sql);
        //Con esta condición simple regresa resultado si esta tiene valor, de lo contrario regresa null.
        return isset($resultado[0])?$resultado[0]:null;
        
    }
    //
    public function save_register($row=array()){
        
        if(empty($row)){
            $error['id']="No se puede realizar la operación";
            return json_encode($error,1);
        } else{
            //Saneamos la cadena alias para bloquear la inyección de código malicioso
            $id = $this->db->escape($row['id']);
            $alias = $this->db->escape($row['alias']);
            $titulo = $this->db->escape($row['titulo']);
            $contenido = $this->db->escape($row['contenido']);
            $es_publicado = $this->db->escape($row['es_publicado']);
            $sql="update paginas set alias='{$alias}', titulo ='{$titulo}', contenido='{$contenido}',es_publicado='{$es_publicado}' where id ='{$id}' ";
            $this->db->query($sql);
        }
        
    }
}



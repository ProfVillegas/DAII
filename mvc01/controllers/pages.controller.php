<?php

class PagesController extends Controller{
    //Creamos el método constructor que se va a encargar de llamar al constructor del padre
    //y así el padre pueda acceder al atributo model 
    public function __construct($data = array()){
        parent::__construct($data);
        //Creamos al objeto y lo asignamos al atributo model del padre
        $this->model =new Page();
    }
    
    
    public function index(){
        //$this->data['test_content'] = 'Here will be a pages list';
        //Recueperamos los registros a través del método getList
        $this->data['pages'] = $this->model->getList();
    }

    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            //$this->data['content'] = "Here will be a page with '{$alias}' alias";
            //Accedemos a un registro especifico
            $this->data['page']= $this->model->getByAlias($alias);
            
        }
    }

    public function new(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            //$this->data['content'] = "Here will be a page with '{$alias}' alias";
            //Accedemos a un registro especifico
            $this->data['page']= $this->model->getByAlias($alias);
            
        }
    }
    public function edit(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            //$this->data['content'] = "Here will be a page with '{$alias}' alias";
            //Accedemos a un registro especifico
            $this->data['page']= $this->model->getByAlias($alias);
            
        }
    }
    //Hacemos las correcciones correcciones en las diferentes vistas
    public function save(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $row['id']=$_POST['id'];
            $row['alias']=$_POST['alias'];
            $row['titulo']=$_POST['titulo'];
            $row['contenido']=$_POST['contenido'];
            $row['es_publicado']=$_POST['es_publicado'];
            $this->data['page']=$this->model->save_register($row);
        } else {
            
        }
    }

}
<?php
class circulo{
    private $color;
    private $radio;
    private static $pi = "3.1416";
    
    public function __construct($r, $col){
        $this->color=$col;
        $this->radio=$r;
    }
    
    static function ValorPi(){
        return self::$pi;
    }
    
    public function area(){
        return $this->radio*self::$pi;
    }
    public function perimetro(){
        return ($this->radio*2)*self::$pi;
    }
    public function color(){
        echo "<style>
                body{background:".$this->color.";}
              </style>";
    }
}

?>
<?php

class figura{
  private $color;
    function __construct(){
        $this->color="#FFF";
    }
    public function color(){
        echo "<style>
                body{background:".$this->color.";}
              </style>";
    }
}
?>
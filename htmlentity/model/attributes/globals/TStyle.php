<?php
namespace htmlentity\model\attributes\globals;

trait TStyle 
{

    public function set_style( Style $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

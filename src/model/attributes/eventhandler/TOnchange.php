<?php
namespace HEF\model\attributes\eventhandler;

trait TOnchange 
{

    public function set_onchange( Onchange $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

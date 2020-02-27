<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadstart 
{

    public function set_onloadstart( Onloadstart $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

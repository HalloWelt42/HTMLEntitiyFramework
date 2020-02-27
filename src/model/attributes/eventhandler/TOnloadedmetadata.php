<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadedmetadata 
{

    public function set_onloadedmetadata( Onloadedmetadata $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

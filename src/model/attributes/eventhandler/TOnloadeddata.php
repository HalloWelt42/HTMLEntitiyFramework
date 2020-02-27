<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadeddata 
{

    public function set_onloadeddata( Onloadeddata $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

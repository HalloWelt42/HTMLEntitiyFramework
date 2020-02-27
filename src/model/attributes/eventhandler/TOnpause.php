<?php
namespace HEF\model\attributes\eventhandler;

trait TOnpause 
{

    public function set_onpause( Onpause $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

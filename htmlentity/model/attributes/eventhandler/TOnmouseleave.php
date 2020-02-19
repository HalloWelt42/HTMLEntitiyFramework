<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmouseleave 
{

    public function set_onmouseleave( Onmouseleave $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

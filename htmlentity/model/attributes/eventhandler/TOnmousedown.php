<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmousedown 
{

    public function set_onmousedown( Onmousedown $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

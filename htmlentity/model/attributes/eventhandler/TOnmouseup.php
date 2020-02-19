<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmouseup 
{

    public function set_onmouseup( Onmouseup $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

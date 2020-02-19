<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnkeyup 
{

    public function set_onkeyup( Onkeyup $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnplay 
{

    public function set_onplay( Onplay $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

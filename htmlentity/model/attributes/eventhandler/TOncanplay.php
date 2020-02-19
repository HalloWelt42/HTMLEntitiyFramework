<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOncanplay 
{

    public function set_oncanplay( Oncanplay $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

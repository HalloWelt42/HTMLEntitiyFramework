<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmouseenter 
{

    public function set_onmouseenter( Onmouseenter $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

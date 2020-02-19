<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnselect 
{

    public function set_onselect( Onselect $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

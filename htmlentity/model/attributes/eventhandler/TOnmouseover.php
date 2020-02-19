<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmouseover 
{

    public function set_onmouseover( Onmouseover $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

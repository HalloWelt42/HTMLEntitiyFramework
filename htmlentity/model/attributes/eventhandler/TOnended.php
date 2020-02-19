<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnended 
{

    public function set_onended( Onended $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnerror 
{

    public function set_onerror( Onerror $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

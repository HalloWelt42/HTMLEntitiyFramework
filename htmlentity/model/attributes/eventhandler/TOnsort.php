<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnsort 
{

    public function set_onsort( Onsort $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

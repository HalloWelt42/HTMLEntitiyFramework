<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOninvalid 
{

    public function set_oninvalid( Oninvalid $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

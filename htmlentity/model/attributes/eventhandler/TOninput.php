<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOninput 
{

    public function set_oninput( Oninput $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

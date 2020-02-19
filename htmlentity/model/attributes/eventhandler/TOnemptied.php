<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnemptied 
{

    public function set_onemptied( Onemptied $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

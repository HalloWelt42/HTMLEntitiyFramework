<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOndurationchange 
{

    public function set_ondurationchange( Ondurationchange $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

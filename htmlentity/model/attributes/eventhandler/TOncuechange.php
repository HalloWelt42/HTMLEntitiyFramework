<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOncuechange 
{

    public function set_oncuechange( Oncuechange $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

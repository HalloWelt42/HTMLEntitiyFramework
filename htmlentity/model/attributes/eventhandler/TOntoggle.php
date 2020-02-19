<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOntoggle 
{

    public function set_ontoggle( Ontoggle $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

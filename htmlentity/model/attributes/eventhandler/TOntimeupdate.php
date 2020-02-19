<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOntimeupdate 
{

    public function set_ontimeupdate( Ontimeupdate $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

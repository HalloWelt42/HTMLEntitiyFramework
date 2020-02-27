<?php
namespace HEF\model\attributes\eventhandler;

trait TOntoggle 
{

    public function set_ontoggle( Ontoggle $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

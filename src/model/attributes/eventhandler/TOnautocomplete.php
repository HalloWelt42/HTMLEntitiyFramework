<?php
namespace HEF\model\attributes\eventhandler;

trait TOnautocomplete 
{

    public function set_onautocomplete( Onautocomplete $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

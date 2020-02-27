<?php
namespace HEF\model\attributes;

trait TNovalidate 
{

    public function set_novalidate( Novalidate $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

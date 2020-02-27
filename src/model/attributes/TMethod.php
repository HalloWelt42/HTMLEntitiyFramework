<?php
namespace HEF\model\attributes;

trait TMethod 
{

    public function set_method( Method $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

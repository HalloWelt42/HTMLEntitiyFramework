<?php
namespace HEF\model\attributes;

trait TEnctype 
{

    public function set_enctype( Enctype $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

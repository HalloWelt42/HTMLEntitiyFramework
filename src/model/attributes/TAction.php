<?php
namespace HEF\model\attributes;

trait TAction 
{

    public function set_action( Action $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

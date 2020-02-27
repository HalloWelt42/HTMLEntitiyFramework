<?php
namespace HEF\model\attributes\globals;

trait TId 
{

    public function set_id( Id $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

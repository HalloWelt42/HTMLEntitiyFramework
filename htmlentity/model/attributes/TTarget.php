<?php
namespace htmlentity\model\attributes;

trait TTarget 
{

    public function set_target( Target $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

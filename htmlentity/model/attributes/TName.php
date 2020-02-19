<?php

namespace htmlentity\model\attributes;

trait TName 
{

    public function set_name( Name $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

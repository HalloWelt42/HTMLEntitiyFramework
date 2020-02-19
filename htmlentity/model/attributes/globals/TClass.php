<?php
namespace htmlentity\model\attributes\globals;

use htmlentity\model\attributes\globals\ClassType;

trait TClass
{

    public function set_class( ClassType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

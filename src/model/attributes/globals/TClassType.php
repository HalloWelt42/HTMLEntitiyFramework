<?php
namespace HEF\model\attributes\globals;

use HEF\model\attributes\globals\ClassType;

trait TClassType
{

    public function set_class( ClassType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

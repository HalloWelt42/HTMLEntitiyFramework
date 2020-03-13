<?php
namespace HEF\model\attributes\globals;

use HEF\model\attributes\globals\ClassType;

trait TClassType
{

    public function sClass( ClassType $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

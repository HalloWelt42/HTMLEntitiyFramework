<?php

namespace HEF\model\attributes;

trait TName 
{

    public function sName( Name $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\globals;

trait TDir 
{

    public function sDir( Dir $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

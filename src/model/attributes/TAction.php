<?php
namespace HEF\model\attributes;

trait TAction 
{

    public function sAction( Action $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

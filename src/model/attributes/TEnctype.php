<?php
namespace HEF\model\attributes;

trait TEnctype 
{

    public function sEnctype( Enctype $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

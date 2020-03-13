<?php
namespace HEF\model\attributes;

trait TNovalidate 
{

    public function sNovalidate( Novalidate $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

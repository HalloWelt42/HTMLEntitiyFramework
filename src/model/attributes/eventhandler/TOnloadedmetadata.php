<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadedmetadata 
{

    public function sOnloadedmetadata( Onloadedmetadata $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

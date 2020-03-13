<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadeddata 
{

    public function sOnloadeddata( Onloadeddata $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

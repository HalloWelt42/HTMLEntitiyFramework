<?php
namespace HEF\model\attributes\eventhandler;

trait TOnloadstart 
{

    public function sOnloadstart( Onloadstart $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

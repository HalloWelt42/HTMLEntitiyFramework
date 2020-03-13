<?php
namespace HEF\model\attributes\eventhandler;

trait TOnchange 
{

    public function sOnchange( Onchange $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

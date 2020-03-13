<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseleave 
{

    public function sOnmouseleave( Onmouseleave $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

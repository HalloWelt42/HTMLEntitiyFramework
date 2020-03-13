<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmousedown 
{

    public function sOnmousedown( Onmousedown $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

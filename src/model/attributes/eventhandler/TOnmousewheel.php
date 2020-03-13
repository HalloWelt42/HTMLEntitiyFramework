<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmousewheel 
{

    public function sOnmousewheel( Onmousewheel $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

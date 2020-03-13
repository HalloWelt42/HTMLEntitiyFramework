<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseup 
{

    public function sOnmouseup( Onmouseup $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

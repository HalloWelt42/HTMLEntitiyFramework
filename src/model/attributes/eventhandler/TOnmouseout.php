<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseout 
{

    public function sOnmouseout( Onmouseout $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmousemove 
{

    public function sOnmousemove( Onmousemove $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

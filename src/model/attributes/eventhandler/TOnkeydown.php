<?php
namespace HEF\model\attributes\eventhandler;

trait TOnkeydown 
{

    public function sOnkeydown( Onkeydown $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

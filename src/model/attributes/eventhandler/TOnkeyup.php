<?php
namespace HEF\model\attributes\eventhandler;

trait TOnkeyup 
{

    public function sOnkeyup( Onkeyup $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

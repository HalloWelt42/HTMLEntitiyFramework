<?php
namespace HEF\model\attributes\eventhandler;

trait TOnpause 
{

    public function sOnpause( Onpause $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

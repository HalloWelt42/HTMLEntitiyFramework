<?php
namespace HEF\model\attributes\eventhandler;

trait TOnvolumechange 
{

    public function sOnvolumechange( Onvolumechange $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

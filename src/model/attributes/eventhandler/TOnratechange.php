<?php
namespace HEF\model\attributes\eventhandler;

trait TOnratechange 
{

    public function sOnratechange( Onratechange $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

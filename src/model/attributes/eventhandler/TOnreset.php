<?php
namespace HEF\model\attributes\eventhandler;

trait TOnreset 
{

    public function sOnreset( Onreset $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

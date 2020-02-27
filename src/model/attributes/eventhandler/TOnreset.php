<?php
namespace HEF\model\attributes\eventhandler;

trait TOnreset 
{

    public function set_onreset( Onreset $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

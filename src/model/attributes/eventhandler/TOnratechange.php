<?php
namespace HEF\model\attributes\eventhandler;

trait TOnratechange 
{

    public function set_onratechange( Onratechange $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

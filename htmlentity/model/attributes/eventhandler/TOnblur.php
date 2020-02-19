<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnblur 
{

    public function set_onblur( Onblur $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnload 
{

    public function set_onload( Onload $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

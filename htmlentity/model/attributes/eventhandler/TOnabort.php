<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnabort 
{

    public function set_onabort( Onabort $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

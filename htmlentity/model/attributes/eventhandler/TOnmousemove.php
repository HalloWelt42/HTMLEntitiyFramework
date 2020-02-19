<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnmousemove 
{

    public function set_onmousemove( Onmousemove $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

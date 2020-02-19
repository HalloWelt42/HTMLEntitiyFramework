<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOncontextmenu 
{

    public function set_oncontextmenu( Oncontextmenu $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

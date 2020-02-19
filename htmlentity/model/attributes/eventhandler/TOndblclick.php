<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOndblclick 
{

    public function set_ondblclick( Ondblclick $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

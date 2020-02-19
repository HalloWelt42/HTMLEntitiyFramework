<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnseeking 
{

    public function set_onseeking( Onseeking $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

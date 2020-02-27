<?php
namespace HEF\model\attributes\eventhandler;

trait TOnsuspend 
{

    public function set_onsuspend( Onsuspend $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOnseeked 
{

    public function set_onseeked( Onseeked $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

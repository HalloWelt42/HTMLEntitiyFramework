<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragleave 
{

    public function set_ondragleave( Ondragleave $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

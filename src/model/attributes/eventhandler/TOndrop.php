<?php
namespace HEF\model\attributes\eventhandler;

trait TOndrop 
{

    public function set_ondrop( Ondrop $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

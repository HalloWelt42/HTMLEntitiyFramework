<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragover 
{

    public function set_ondragover( Ondragover $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

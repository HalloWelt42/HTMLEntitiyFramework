<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragenter 
{

    public function set_ondragenter( Ondragenter $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

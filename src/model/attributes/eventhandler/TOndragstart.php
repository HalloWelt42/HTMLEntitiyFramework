<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragstart 
{

    public function set_ondragstart( Ondragstart $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

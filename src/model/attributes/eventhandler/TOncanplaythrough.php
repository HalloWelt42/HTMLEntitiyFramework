<?php
namespace HEF\model\attributes\eventhandler;

trait TOncanplaythrough 
{

    public function set_oncanplaythrough( Oncanplaythrough $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

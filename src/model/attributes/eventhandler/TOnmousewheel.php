<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmousewheel 
{

    public function set_onmousewheel( Onmousewheel $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOnkeydown 
{

    public function set_onkeydown( Onkeydown $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

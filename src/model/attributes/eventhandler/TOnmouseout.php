<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseout 
{

    public function set_onmouseout( Onmouseout $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

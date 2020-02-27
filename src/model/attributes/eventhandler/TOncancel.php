<?php
namespace HEF\model\attributes\eventhandler;

trait TOncancel 
{

    public function set_oncancel( Oncancel $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

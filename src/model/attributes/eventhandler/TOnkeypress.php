<?php
namespace HEF\model\attributes\eventhandler;

trait TOnkeypress 
{

    public function set_onkeypress( Onkeypress $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

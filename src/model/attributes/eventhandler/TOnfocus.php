<?php
namespace HEF\model\attributes\eventhandler;

trait TOnfocus 
{

    public function set_onfocus( Onfocus $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

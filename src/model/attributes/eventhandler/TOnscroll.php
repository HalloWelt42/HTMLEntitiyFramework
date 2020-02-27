<?php
namespace HEF\model\attributes\eventhandler;

trait TOnscroll 
{

    public function set_onscroll( Onscroll $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

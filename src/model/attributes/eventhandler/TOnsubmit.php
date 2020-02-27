<?php
namespace HEF\model\attributes\eventhandler;

trait TOnsubmit 
{

    public function set_onsubmit( Onsubmit $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

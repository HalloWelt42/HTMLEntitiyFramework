<?php
namespace HEF\model\attributes\eventhandler;

trait TOnresize 
{

    public function set_onresize( Onresize $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOnclose 
{

    public function set_onclose( Onclose $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

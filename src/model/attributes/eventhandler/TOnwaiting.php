<?php
namespace HEF\model\attributes\eventhandler;

trait TOnwaiting 
{

    public function set_onwaiting( Onwaiting $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

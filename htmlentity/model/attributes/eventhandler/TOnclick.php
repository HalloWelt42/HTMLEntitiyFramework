<?php
namespace htmlentity\model\attributes\eventhandler;

trait TOnclick 
{

    public function set_onclick( Onclick $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

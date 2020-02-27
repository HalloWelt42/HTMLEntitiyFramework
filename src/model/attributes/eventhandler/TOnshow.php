<?php
namespace HEF\model\attributes\eventhandler;

trait TOnshow 
{

    public function set_onshow( Onshow $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

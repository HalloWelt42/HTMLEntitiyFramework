<?php
namespace HEF\model\attributes\eventhandler;

trait TOnprogress 
{

    public function set_onprogress( Onprogress $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

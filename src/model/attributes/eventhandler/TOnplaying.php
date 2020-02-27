<?php
namespace HEF\model\attributes\eventhandler;

trait TOnplaying 
{

    public function set_onplaying( Onplaying $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

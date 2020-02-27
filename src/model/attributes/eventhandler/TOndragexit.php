<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragexit 
{

    public function set_ondragexit( Ondragexit $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

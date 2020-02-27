<?php
namespace HEF\model\attributes\eventhandler;

trait TOnstalled 
{

    public function set_onstalled( Onstalled $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

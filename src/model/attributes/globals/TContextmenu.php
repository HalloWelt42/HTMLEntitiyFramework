<?php
namespace HEF\model\attributes\globals;

trait TContextmenu 
{

    public function set_contextmenu( Contextmenu $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

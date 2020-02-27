<?php
namespace HEF\model\attributes\eventhandler;

trait TOndrag 
{

    public function set_ondrag( Ondrag $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

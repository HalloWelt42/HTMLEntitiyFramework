<?php
namespace htmlentity\model\attributes\globals;

trait TSlot 
{

    public function set_slot( Slot $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

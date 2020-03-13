<?php
namespace HEF\model\attributes\globals;

trait TSlot 
{

    public function sSlot( Slot $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

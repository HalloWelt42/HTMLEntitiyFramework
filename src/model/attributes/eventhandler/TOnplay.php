<?php
namespace HEF\model\attributes\eventhandler;

trait TOnplay 
{

    public function sOnplay( Onplay $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

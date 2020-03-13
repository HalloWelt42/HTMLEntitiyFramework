<?php
namespace HEF\model\attributes\eventhandler;

trait TOnsuspend 
{

    public function sOnsuspend( Onsuspend $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

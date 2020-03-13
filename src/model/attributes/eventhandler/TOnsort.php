<?php
namespace HEF\model\attributes\eventhandler;

trait TOnsort 
{

    public function sOnsort( Onsort $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

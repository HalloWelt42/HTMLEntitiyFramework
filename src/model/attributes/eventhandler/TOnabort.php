<?php
namespace HEF\model\attributes\eventhandler;

trait TOnabort 
{

    public function sOnabort( Onabort $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

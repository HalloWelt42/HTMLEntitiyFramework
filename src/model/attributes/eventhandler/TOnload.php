<?php
namespace HEF\model\attributes\eventhandler;

trait TOnload 
{

    public function sOnload( Onload $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

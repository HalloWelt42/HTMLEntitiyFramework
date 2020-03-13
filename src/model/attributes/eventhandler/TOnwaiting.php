<?php
namespace HEF\model\attributes\eventhandler;

trait TOnwaiting 
{

    public function sOnwaiting( Onwaiting $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

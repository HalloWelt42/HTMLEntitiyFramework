<?php
namespace HEF\model\attributes\eventhandler;

trait TOnended 
{

    public function sOnended( Onended $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

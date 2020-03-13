<?php
namespace HEF\model\attributes\eventhandler;

trait TOnfocus 
{

    public function sOnfocus( Onfocus $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

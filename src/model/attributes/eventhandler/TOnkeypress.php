<?php
namespace HEF\model\attributes\eventhandler;

trait TOnkeypress 
{

    public function sOnkeypress( Onkeypress $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

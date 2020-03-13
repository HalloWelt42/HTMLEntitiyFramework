<?php
namespace HEF\model\attributes\eventhandler;

trait TOndurationchange 
{

    public function sOndurationchange( Ondurationchange $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

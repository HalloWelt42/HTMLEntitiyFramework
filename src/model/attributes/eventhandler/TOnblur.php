<?php
namespace HEF\model\attributes\eventhandler;

trait TOnblur 
{

    public function sOnblur( Onblur $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

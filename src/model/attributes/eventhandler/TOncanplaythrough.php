<?php
namespace HEF\model\attributes\eventhandler;

trait TOncanplaythrough 
{

    public function sOncanplaythrough( Oncanplaythrough $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

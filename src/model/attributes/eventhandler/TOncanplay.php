<?php
namespace HEF\model\attributes\eventhandler;

trait TOncanplay 
{

    public function sOncanplay( Oncanplay $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

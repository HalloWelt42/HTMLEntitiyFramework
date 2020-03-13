<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseenter 
{

    public function sOnmouseenter( Onmouseenter $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

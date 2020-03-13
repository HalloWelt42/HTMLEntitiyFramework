<?php
namespace HEF\model\attributes\eventhandler;

trait TOnmouseover 
{

    public function sOnmouseover( Onmouseover $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

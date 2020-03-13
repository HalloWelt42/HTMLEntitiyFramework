<?php
namespace HEF\model\attributes\eventhandler;

trait TOnresize 
{

    public function sOnresize( Onresize $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

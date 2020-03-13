<?php
namespace HEF\model\attributes\eventhandler;

trait TOnplaying 
{

    public function sOnplaying( Onplaying $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

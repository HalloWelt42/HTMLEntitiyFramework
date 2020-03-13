<?php
namespace HEF\model\attributes\eventhandler;

trait TOnshow 
{

    public function sOnshow( Onshow $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

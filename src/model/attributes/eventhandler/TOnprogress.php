<?php
namespace HEF\model\attributes\eventhandler;

trait TOnprogress 
{

    public function sOnprogress( Onprogress $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

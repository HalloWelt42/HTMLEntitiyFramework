<?php
namespace HEF\model\attributes\eventhandler;

trait TOnerror 
{

    public function sOnerror( Onerror $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

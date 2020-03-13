<?php
namespace HEF\model\attributes\eventhandler;

trait TOnseeking 
{

    public function sOnseeking( Onseeking $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

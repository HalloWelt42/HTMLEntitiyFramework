<?php
namespace HEF\model\attributes\eventhandler;

trait TOnseeked 
{

    public function sOnseeked( Onseeked $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragleave 
{

    public function sOndragleave( Ondragleave $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

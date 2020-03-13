<?php
namespace HEF\model\attributes\eventhandler;

trait TOndrop 
{

    public function sOndrop( Ondrop $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

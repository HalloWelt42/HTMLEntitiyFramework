<?php
namespace HEF\model\attributes\eventhandler;

trait TOninvalid 
{

    public function sOninvalid( Oninvalid $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

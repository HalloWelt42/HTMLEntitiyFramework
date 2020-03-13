<?php
namespace HEF\model\attributes\eventhandler;

trait TOninput 
{

    public function sOninput( Oninput $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

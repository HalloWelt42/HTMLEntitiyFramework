<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragover 
{

    public function sOndragover( Ondragover $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

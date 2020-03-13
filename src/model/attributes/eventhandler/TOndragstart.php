<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragstart 
{

    public function sOndragstart( Ondragstart $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

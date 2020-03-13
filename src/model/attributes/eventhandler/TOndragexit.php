<?php
namespace HEF\model\attributes\eventhandler;

trait TOndragexit 
{

    public function sOndragexit( Ondragexit $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

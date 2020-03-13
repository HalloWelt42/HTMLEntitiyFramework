<?php
namespace HEF\model\attributes\eventhandler;

trait TOnautocomplete 
{

    public function sOnautocomplete( Onautocomplete $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

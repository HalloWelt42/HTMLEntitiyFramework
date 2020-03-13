<?php
namespace HEF\model\attributes\eventhandler;

trait TOnscroll 
{

    public function sOnscroll( Onscroll $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

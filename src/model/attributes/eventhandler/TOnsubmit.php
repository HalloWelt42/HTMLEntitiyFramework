<?php
namespace HEF\model\attributes\eventhandler;

trait TOnsubmit 
{

    public function sOnsubmit( Onsubmit $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOncancel 
{

    public function sOncancel( Oncancel $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

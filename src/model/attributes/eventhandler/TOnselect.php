<?php
namespace HEF\model\attributes\eventhandler;

trait TOnselect 
{

    public function sOnselect( Onselect $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\eventhandler;

trait TOnclose 
{

    public function sOnclose( Onclose $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

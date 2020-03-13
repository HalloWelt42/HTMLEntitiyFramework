<?php
namespace HEF\model\attributes\eventhandler;

trait TOncontextmenu 
{

    public function sOncontextmenu( Oncontextmenu $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

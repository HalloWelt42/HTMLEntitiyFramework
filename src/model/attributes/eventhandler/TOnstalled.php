<?php
namespace HEF\model\attributes\eventhandler;

trait TOnstalled 
{

    public function sOnstalled( Onstalled $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

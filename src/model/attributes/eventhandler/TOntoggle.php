<?php
namespace HEF\model\attributes\eventhandler;

trait TOntoggle 
{

    public function sOntoggle( Ontoggle $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

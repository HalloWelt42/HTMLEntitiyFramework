<?php
namespace HEF\model\attributes\eventhandler;

trait TOntimeupdate 
{

    public function sOntimeupdate( Ontimeupdate $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

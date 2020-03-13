<?php
namespace HEF\model\attributes\eventhandler;

trait TOncuechange 
{

    public function sOncuechange( Oncuechange $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

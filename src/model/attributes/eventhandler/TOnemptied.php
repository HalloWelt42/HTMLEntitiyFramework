<?php
namespace HEF\model\attributes\eventhandler;

trait TOnemptied 
{

    public function sOnemptied( Onemptied $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

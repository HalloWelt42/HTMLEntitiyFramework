<?php
namespace HEF\model\attributes\eventhandler;

trait TOnclick 
{

    public function sOnclick( Onclick $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

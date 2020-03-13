<?php
namespace HEF\model\attributes\eventhandler;

trait TOndrag 
{

    public function sOndrag( Ondrag $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

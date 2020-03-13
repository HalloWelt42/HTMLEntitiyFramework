<?php
namespace HEF\model\attributes\eventhandler;

trait TOndblclick 
{

    public function sOndblclick( Ondblclick $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

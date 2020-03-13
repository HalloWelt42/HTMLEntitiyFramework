<?php


namespace HEF\model\attributes;

trait THttpEquiv
{

    public function sHttp_equiv( HttpEquiv $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
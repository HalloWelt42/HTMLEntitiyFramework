<?php


namespace HEF\model\attributes;

trait THttpEquiv
{

    public function set_http_equiv( HttpEquiv $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
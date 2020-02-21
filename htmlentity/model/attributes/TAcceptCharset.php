<?php
namespace htmlentity\model\attributes;

trait TAcceptCharset 
{

    public function set_accept_charset( AcceptCharset $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes;

trait TAcceptCharset 
{

    public function sAccept_charset( AcceptCharset $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

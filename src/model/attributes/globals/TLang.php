<?php
namespace HEF\model\attributes\globals;

trait TLang 
{

    public function sLang( Lang $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\globals;

trait THidden 
{

    public function sHidden( Hidden $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

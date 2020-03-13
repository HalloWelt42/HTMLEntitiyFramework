<?php
namespace HEF\model\attributes\globals;

trait TItemprop 
{

    public function sItemprop( Itemprop $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

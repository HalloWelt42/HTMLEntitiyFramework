<?php
namespace HEF\model\attributes\globals;

trait TId 
{

    public function sId( Id $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

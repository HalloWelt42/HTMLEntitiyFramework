<?php
namespace HEF\model\attributes;

trait TMethod 
{

    public function sMethod( Method $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

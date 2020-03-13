<?php
namespace HEF\model\attributes;

trait TTarget 
{

    public function sTarget( Target $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

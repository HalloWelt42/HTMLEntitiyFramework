<?php
namespace HEF\model\attributes\globals;

trait TTitle 
{

    public function sTitle( Title $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

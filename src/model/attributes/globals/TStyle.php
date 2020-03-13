<?php
namespace HEF\model\attributes\globals;

trait TStyle 
{

    public function sStyle( Style $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

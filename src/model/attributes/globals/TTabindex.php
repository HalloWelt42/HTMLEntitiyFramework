<?php
namespace HEF\model\attributes\globals;

trait TTabindex 
{

    public function sTabindex( Tabindex $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

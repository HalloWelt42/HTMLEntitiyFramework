<?php
namespace HEF\model\attributes\globals;

trait TContextmenu 
{

    public function sContextmenu( Contextmenu $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

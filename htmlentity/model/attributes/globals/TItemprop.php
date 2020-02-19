<?php
namespace htmlentity\model\attributes\globals;

trait TItemprop 
{

    public function set_itemprop( Itemprop $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

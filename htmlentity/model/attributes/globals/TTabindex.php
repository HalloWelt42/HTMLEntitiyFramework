<?php
namespace htmlentity\model\attributes\globals;

trait TTabindex 
{

    public function set_tabindex( Tabindex $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

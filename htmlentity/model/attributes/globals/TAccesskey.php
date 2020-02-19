<?php
namespace htmlentity\model\attributes\globals;


trait TAccesskey
{

    public function set_accesskey( Accesskey $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

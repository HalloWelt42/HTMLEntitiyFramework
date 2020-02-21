<?php
namespace htmlentity\model\attributes;

trait TAccept 
{

    public function set_accept( Accept $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes\globals;

trait TDir 
{

    public function set_dir( Dir $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

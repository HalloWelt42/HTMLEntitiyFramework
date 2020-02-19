<?php
namespace htmlentity\model\attributes\globals;

trait TContenteditable 
{

    public function set_contenteditable( Contenteditable $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

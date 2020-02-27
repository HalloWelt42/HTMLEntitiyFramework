<?php
namespace HEF\model\attributes\globals;

trait TDropzone 
{

    public function set_dropzone( Dropzone $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

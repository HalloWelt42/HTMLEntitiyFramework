<?php
namespace HEF\model\attributes\globals;

trait TDropzone 
{

    public function sDropzone( Dropzone $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

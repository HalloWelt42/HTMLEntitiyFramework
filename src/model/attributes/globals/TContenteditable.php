<?php
namespace HEF\model\attributes\globals;

trait TContenteditable 
{

    public function sContenteditable( Contenteditable $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

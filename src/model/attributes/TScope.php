<?php
namespace HEF\model\attributes;

trait TScope 
{

  /**
   * 
   * 
   * 
   * @param Scope $obj
   * @return $this
   */
    public function sScope( Scope $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

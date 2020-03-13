<?php
namespace HEF\model\attributes;

trait TDefer 
{

  /**
   * 
   * 
   * 
   * @param Defer $obj
   * @return $this
   */
    public function sDefer( Defer $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

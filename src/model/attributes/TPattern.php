<?php
namespace HEF\model\attributes;

trait TPattern 
{

  /**
   * 
   * 
   * 
   * @param Pattern $obj
   * @return $this
   */
    public function sPattern( Pattern $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

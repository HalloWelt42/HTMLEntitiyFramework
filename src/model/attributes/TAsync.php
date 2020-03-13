<?php
namespace HEF\model\attributes;

trait TAsync 
{

  /**
   * 
   * 
   * 
   * @param Async $obj
   * @return $this
   */
    public function sAsync( Async $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

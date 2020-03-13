<?php
namespace HEF\model\attributes;

trait TSize 
{

  /**
   * 
   * 
   * 
   * @param Size $obj
   * @return $this
   */
    public function sSize( Size $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

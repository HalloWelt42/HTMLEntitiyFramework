<?php
namespace HEF\model\attributes;

trait TMin 
{

  /**
   * 
   * 
   * 
   * @param Min $obj
   * @return $this
   */
    public function sMin( Min $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

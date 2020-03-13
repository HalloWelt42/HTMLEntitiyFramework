<?php
namespace HEF\model\attributes;

trait TColor 
{

  /**
   * 
   * 
   * 
   * @param Color $obj
   * @return $this
   */
    public function sColor( Color $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

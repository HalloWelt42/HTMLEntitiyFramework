<?php
namespace HEF\model\attributes;

trait TBorder 
{

  /**
   * 
   * 
   * 
   * @param Border $obj
   * @return $this
   */
    public function sBorder( Border $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

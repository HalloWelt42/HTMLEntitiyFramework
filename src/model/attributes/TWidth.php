<?php
namespace HEF\model\attributes;

trait TWidth 
{

  /**
   * 
   * 
   * 
   * @param Width $obj
   * @return $this
   */
    public function sWidth( Width $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

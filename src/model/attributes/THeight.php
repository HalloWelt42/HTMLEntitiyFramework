<?php
namespace HEF\model\attributes;

trait THeight 
{

  /**
   * 
   * 
   * 
   * @param Height $obj
   * @return $this
   */
    public function sHeight( Height $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

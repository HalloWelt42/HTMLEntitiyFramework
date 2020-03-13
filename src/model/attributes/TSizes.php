<?php
namespace HEF\model\attributes;

trait TSizes 
{

  /**
   * 
   * 
   * 
   * @param Sizes $obj
   * @return $this
   */
    public function sSizes( Sizes $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

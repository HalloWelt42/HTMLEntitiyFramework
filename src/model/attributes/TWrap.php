<?php
namespace HEF\model\attributes;

trait TWrap 
{

  /**
   * 
   * 
   * 
   * @param Wrap $obj
   * @return $this
   */
    public function sWrap( Wrap $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

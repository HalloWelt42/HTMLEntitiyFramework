<?php
namespace HEF\model\attributes;

trait TSrc 
{

  /**
   * 
   * 
   * 
   * @param Src $obj
   * @return $this
   */
    public function sSrc( Src $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

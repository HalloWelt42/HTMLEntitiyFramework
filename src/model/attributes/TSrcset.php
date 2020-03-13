<?php
namespace HEF\model\attributes;

trait TSrcset 
{

  /**
   * 
   * 
   * 
   * @param Srcset $obj
   * @return $this
   */
    public function sSrcset( Srcset $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}

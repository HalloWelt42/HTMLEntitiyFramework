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
    public function set_srcset( Srcset $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

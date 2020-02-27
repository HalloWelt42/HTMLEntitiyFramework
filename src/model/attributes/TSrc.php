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
    public function set_src( Src $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

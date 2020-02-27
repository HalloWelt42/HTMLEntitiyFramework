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
    public function set_wrap( Wrap $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

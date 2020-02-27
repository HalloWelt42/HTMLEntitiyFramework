<?php
namespace HEF\model\attributes;

trait TSrclang 
{

  /**
   * 
   * 
   * 
   * @param Srclang $obj
   * @return $this
   */
    public function set_srclang( Srclang $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

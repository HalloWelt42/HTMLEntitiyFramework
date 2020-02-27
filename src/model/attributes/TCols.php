<?php
namespace HEF\model\attributes;

trait TCols 
{

  /**
   * 
   * 
   * 
   * @param Cols $obj
   * @return $this
   */
    public function set_cols( Cols $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace HEF\model\attributes;

trait TRows 
{

  /**
   * 
   * 
   * 
   * @param Rows $obj
   * @return $this
   */
    public function set_rows( Rows $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

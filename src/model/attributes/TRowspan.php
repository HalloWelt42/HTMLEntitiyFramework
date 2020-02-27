<?php
namespace HEF\model\attributes;

trait TRowspan 
{

  /**
   * 
   * 
   * 
   * @param Rowspan $obj
   * @return $this
   */
    public function set_rowspan( Rowspan $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

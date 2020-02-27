<?php
namespace HEF\model\attributes;

trait TPlaceholder 
{

  /**
   * 
   * 
   * 
   * @param Placeholder $obj
   * @return $this
   */
    public function set_placeholder( Placeholder $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

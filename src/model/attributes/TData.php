<?php
namespace HEF\model\attributes;

trait TData 
{

  /**
   * 
   * 
   * 
   * @param Data $obj
   * @return $this
   */
    public function set_data( Data $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

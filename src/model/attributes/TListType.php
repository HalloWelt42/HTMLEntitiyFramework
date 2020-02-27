<?php
namespace HEF\model\attributes;

trait TListType 
{

  /**
   * 
   * 
   * 
   * @param ListType $obj
   * @return $this
   */
    public function set_list( ListType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

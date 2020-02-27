<?php
namespace HEF\model\attributes;

trait TKind 
{

  /**
   * 
   * 
   * 
   * @param Kind $obj
   * @return $this
   */
    public function set_kind( Kind $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

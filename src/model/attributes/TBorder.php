<?php
namespace HEF\model\attributes;

trait TBorder 
{

  /**
   * 
   * 
   * 
   * @param Border $obj
   * @return $this
   */
    public function set_border( Border $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

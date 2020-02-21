<?php
namespace htmlentity\model\attributes;

trait TWidth 
{

  /**
   * 
   * 
   * 
   * @param Width $obj
   * @return $this
   */
    public function set_width( Width $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

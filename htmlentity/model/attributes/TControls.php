<?php
namespace htmlentity\model\attributes;

trait TControls 
{

  /**
   * 
   * 
   * 
   * @param Controls $obj
   * @return $this
   */
    public function set_controls( Controls $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

<?php
namespace htmlentity\model\attributes;

trait TSummary 
{

  /**
   * 
   * 
   * 
   * @param Summary $obj
   * @return $this
   */
    public function set_summary( Summary $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

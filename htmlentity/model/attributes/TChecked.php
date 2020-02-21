<?php
namespace htmlentity\model\attributes;

trait TChecked 
{

  /**
   * 
   * 
   * 
   * @param Checked $obj
   * @return $this
   */
    public function set_checked( Checked $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

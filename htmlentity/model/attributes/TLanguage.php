<?php
namespace htmlentity\model\attributes;

trait TLanguage 
{

  /**
   * 
   * 
   * 
   * @param Language $obj
   * @return $this
   */
    public function set_language( Language $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

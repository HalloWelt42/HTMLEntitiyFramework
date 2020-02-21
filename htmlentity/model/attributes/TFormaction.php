<?php
namespace htmlentity\model\attributes;

trait TFormaction 
{

  /**
   * 
   * 
   * 
   * @param Formaction $obj
   * @return $this
   */
    public function set_formaction( Formaction $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

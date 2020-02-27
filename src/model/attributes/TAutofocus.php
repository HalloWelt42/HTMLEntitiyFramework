<?php
namespace HEF\model\attributes;

trait TAutofocus 
{

  /**
   * 
   * 
   * 
   * @param Autofocus $obj
   * @return $this
   */
    public function set_autofocus( Autofocus $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

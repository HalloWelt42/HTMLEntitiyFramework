<?php
namespace HEF\model\attributes;

trait TKeytype 
{

  /**
   * 
   * 
   * 
   * @param Keytype $obj
   * @return $this
   */
    public function set_keytype( Keytype $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}

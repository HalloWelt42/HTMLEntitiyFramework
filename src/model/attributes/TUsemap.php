<?php
namespace HEF\model\attributes;

trait TUsemap 
{

  /**
   * 
   * 
   * 
   * @param Usemap $obj
   * @return $this
   */
    public function set_usemap( Usemap $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
